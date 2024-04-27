<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use DB;

class CustomAuthController extends Controller
{
    public function loginPage()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {

        $request->validate([
            'user_name' => 'required',
            'password' => 'required',
        ]);
        $username = $request->user_name;
        $password = $request->password;
        $results = DB::select('select * from admin where admin_user_name = :uname and admin_pw =:pw', ['uname' => $username, 'pw' => $password]);

        if (!empty($results)) {
            return view('auth.adminDashboard');
        } else {
            $results = DB::select('select * from customer where custo_name = :uname', ['uname' => $username]);

            $storedHashedPassword = $results[0]->custo_pw; // Retrieve hashed password from your database
            $userEnteredPassword = $password; // Get the password entered by the user during login

            // Verify the password
            if (password_verify($userEnteredPassword, $storedHashedPassword)) {
                $message = 'Success';
                return redirect()->route('customerDashboard')->with('success', $message);
            } else {
                return back()->withErrors(['signup' => 'Registration failed!']);
            }
        }
    }


    public function dashboard()
    {
        return view('dashboard');
    }

    public function signupPage()
    {
        return view('signupPage');
    }

    public function signup(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $address = $request->address;
        $nic = $request->nic;
        $mobile = $request->mobile;
        $dob = $request->dob;
        $gender = $request->gender;
        $pw = $request->pw;

        $results = DB::table('customer')->insert([
            'custo_name' => $name,
            'custo_email' => $email,
            'custo_address' => $address,
            'custo_nic' => $nic,
            'custo_pno' => $mobile,
            'custo_dob' => $dob,
            'custo_gender' => $gender,
            'custo_pw' => password_hash($pw, PASSWORD_DEFAULT),
        ]);


        if ($results) {
            $message = 'You have successfully registered! Please login to continue.';
            return redirect()->route('loginPage')->with('success', $message);
        } else {
            return back()->withErrors(['signup' => 'Registration failed!']);
        }
    }

    public function customerDashboard()
    {
        return view('customerDashboard');
    }

    public function customerView()
    {
        $customers = DB::select('select * from customer');
        return view('customerView', compact('customers'));
    }

    public function customerDelete(Request $request)
    {
        $customerId = $request->query('id');
        DB::select('DELETE FROM customer where custo_id = :id', ['id' => $customerId]);
        return redirect()->route('customerView')->with('success', 'Student has been deleted successfully');
    }

    public function customerEditView(Request $request)
    {
        $customerId = $request->query('id');
        $customer = DB::select('select * from customer WHERE custo_id = :id', ['id' => $customerId]);
        return view('customerEditView', compact('customer'));
    }

    public function customerUpdate(Request $request)
    {
        $customerId = $request->query('id');
        $name = $request->name;
        $email = $request->email;
        $address = $request->address;
        $nic = $request->nic;
        $mobile = $request->mobile;
        $dob = $request->dob;
        $gender = $request->gender;

        DB::select(
            'UPDATE customer SET custo_name =:name, custo_email =:email, custo_address =:address, custo_nic =:nic, custo_pno =:pno, custo_dob =:dob, custo_gender =:gender WHERE custo_id =:id',
            ['id' => $customerId, 'name' => $name, 'email' => $email, 'address' => $address, 'nic' => $nic, 'pno' => $mobile, 'dob' => $dob, 'gender' => $gender]
        );
        return redirect()->route('customerView');
    }

    public function customerCreateView()
    {
        return view('customerCreateView');
    }

    public function customerCreate(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $address = $request->address;
        $nic = $request->nic;
        $mobile = $request->mobile;
        $dob = $request->dob;
        $gender = $request->gender;
        $pw = $request->pw;

        $results = DB::table('customer')->insert([
            'custo_name' => $name,
            'custo_email' => $email,
            'custo_address' => $address,
            'custo_nic' => $nic,
            'custo_pno' => $mobile,
            'custo_dob' => $dob,
            'custo_gender' => $gender,
            'custo_pw' => password_hash($pw, PASSWORD_DEFAULT),
        ]);


        if ($results) {
            return redirect()->route('customerView');
        }
    }
}

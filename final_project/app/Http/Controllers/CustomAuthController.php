<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
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
            // Success message (consider using a flash session for persistence)
            $message = 'You have successfully registered! Please login to continue.';
            return redirect()->route('loginPage')->with('success', $message);
        } else {
            // Handle failed registration (e.g., display error message)
            return back()->withErrors(['signup' => 'Registration failed!']);
        }
    }
}

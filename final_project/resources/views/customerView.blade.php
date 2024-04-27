@extends('auth.layouts')
@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mb-5">
                <h2>Customer Details</h2>
            </div>
            <div class="pull-right mb-5">
                <a class="btn btn-success" href="{{ route('customerCreateView') }}"> Create Customer</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <table class="table table-bordered" style="width:1500px;">
        <thead>
            <tr>
                <th>No</th>
                <th>Customer Name</th>
                <th>Customer Email</th>
                <th>Customer Address</th>
                <th>Customer NIC</th>
                <th>Customer Mobile Number</th>
                <th>Customer DOB</th>
                <th>Customer Gender</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
            <tr>
                <td>{{ $customer->custo_id }}</td>
                <td>{{ $customer->custo_name }}</td>
                <td>{{ $customer->custo_email }}</td>
                <td>{{ $customer->custo_address }}</td>
                <td>{{ $customer->custo_nic }}</td>
                <td>{{ $customer->custo_pno }}</td>
                <td>{{ $customer->custo_dob }}</td>
                <td>{{ $customer->custo_gender }}</td>
                <td>
                    <form action="{{route('customerDelete', ['id' => $customer->custo_id])}}" method="Post">
                        <a class="btn btn-primary" href="{{route('customerEditView', ['id' => $customer->custo_id])}}">Edit</a>
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function() {
        setTimeout(function() {
            $(".alert-success").fadeOut("slow"); // Fade out the alert slowly
        }, 1000); // Wait 3 seconds before fading (adjust as needed)
    });
</script>
@endsection
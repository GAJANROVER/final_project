<style>
    .mandatory-field::after {
        content: " •";
        color: red;
    }
</style>
@extends('auth.layouts')
@section('content')
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Create An Account</h3>
                        <form method="POST" action="{{ route('signup') }}" id="signupForm">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div data-mdb-input-init class="form-outline">
                                        <label class="form-label mandatory-field">Name</label>
                                        <input type="text" id="name" name="name" class="form-control form-control-lg" required />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div data-mdb-input-init class="form-outline">
                                        <label class="form-label mandatory-field">Email</label>
                                        <input type="text" id="email" name="email" class="form-control form-control-lg" required />
                                        <span id="emailError" class="error-message"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mb-4 d-flex align-items-center">
                                    <div data-mdb-input-init class="form-outline datepicker w-100">
                                        <label class="form-label">Address</label>
                                        <input type="text" class="form-control form-control-lg" id="address" name="address" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4 pb-2">
                                    <div data-mdb-input-init class="form-outline">
                                        <label class="form-label mandatory-field">National ID Number</label>
                                        <input type="text" id="nic" class="form-control form-control-lg" name="nic" required />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4 pb-2">
                                    <div data-mdb-input-init class="form-outline">
                                        <label class="form-label">Mobile Number</label>
                                        <input type="text" id="mobile" class="form-control form-control-lg" name="mobile" />
                                        <span id="mobileError" class="error-message"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4 pb-2">
                                    <div data-mdb-input-init class="form-outline">
                                        <label class="form-label">Date of birth</label>
                                        <input type="date" id="dob" class="form-control form-control-lg" name="dob" />
                                        <span id="dobError" class="error-message"></span>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4 pb-2">
                                    <label class="form-label">Gender</label>
                                    <select class="select form-control-lg" style="width: 100%;" name="gender" id="gender">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4 pb-2">
                                    <div data-mdb-input-init class="form-outline">
                                        <label class="form-label mandatory-field">Password</label>
                                        <input type="password" id="pw" class="form-control form-control-lg" name="pw" required />
                                        <span id="pwError" class="error-message"></span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-outline-success">Sign Up</button>
                            </div>
                            @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    // Email validation
    document.getElementById('signupForm').addEventListener('submit', function(event) {
        var emailInput = document.getElementById('email');
        var emailError = document.getElementById('emailError');
        var email = emailInput.value.trim();

        // Regular expression for validating email format
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        // Check if email is empty or not in correct format
        if (email === '' || !emailRegex.test(email)) {
            emailError.textContent = 'Please enter a valid email address';
            emailInput.focus();
            event.preventDefault();
        } else {
            emailError.textContent = '';
        }
    });
</script>


<script>
    // Mobile Number Validation
    document.getElementById('signupForm').addEventListener('submit', function(event) {
        var mobileInput = document.getElementById('mobile');
        var mobileError = document.getElementById('mobileError');
        var mobile = mobileInput.value.trim(); // Trim the mobile number value

        // Regular expression for validating mobile number format (only digits)
        var mobileRegex = /^[0-9]+$/;

        // Check if mobile number is empty or not in correct format
        if (mobile === '' || !mobileRegex.test(mobile)) {
            mobileError.textContent = 'Please enter a valid mobile number';
            mobileInput.focus();
            event.preventDefault();
        } else {
            mobileError.textContent = '';
        }
    });
</script>

<script>
    // password validation
    document.getElementById('signupForm').addEventListener('submit', function(event) {
        var pwInput = document.getElementById('pw');
        var pwError = document.getElementById('pwError');
        var pw = pwInput.value.trim(); // Trim the password value

        // Regular expressions for password validation
        var containsLetter = /[a-zA-Z]/;
        var containsNumber = /[0-9]/;
        var containsSpecialChar = /[^a-zA-Z0-9]/;

        // Check if password meets the criteria
        if (pw.length < 8 || !containsLetter.test(pw) || !containsNumber.test(pw) || !containsSpecialChar.test(pw)) {
            pwError.textContent = 'Password must contain at least 8 characters, including letters, numbers, and special characters';
            pwInput.focus();
            event.preventDefault();
        } else {
            pwError.textContent = '';
        }
    });
</script>
@endsection
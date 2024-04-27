<!DOCTYPE html>
<html>

<head>
    <title>Gajan Travels</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('img/icon.ico') }}" type="image/icon type">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body>

    <nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand mr-auto" href="{{route('dashboard')}}">Gajan Travels</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signupPage') }}">Book Vehicle</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signupPage') }}">Vehicle Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('customerView') }}">Customer Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signupPage') }}">Driver Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signupPage') }}">Rides Reports</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signupPage') }}">Sign up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('loginPage') }}">Login</a>
                    </li>
                    <li class=" nav-item">
                        <a class="nav-link" href="{{ route('loginPage') }}">
                            <i class="fas fa-sign-out-alt"></i> <!-- Bootstrap logout icon -->
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        @yield('content')
    </div>
    <div class="container">
        <footer class="py-3 my-4">
            <!-- <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
            </ul> -->
            <p class="text-center text-muted">Designed By Gajan</p>
        </footer>
    </div>
</body>

</html>
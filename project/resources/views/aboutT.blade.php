<!DOCTYPE html>
<html lang="en">

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{asset('asset/images/.png')}}">
    <link rel="stylesheet" href="{{asset('asset/bootstrap/icons/font/bootstrap-icons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('asset/css1/bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css1/style1.css') }}">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <script src="{{asset('asset/js1/jquery1.js')}}"></script>
    <!-- <script src="{{asset('asset//j1/jsfunction1.js')}}"></script> -->
    

    <head>
        <title>Girls Society - @yield('title')</title>
    </head>

<body>

@section('header')
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <!-- Logo and Brand -->
            <a class="navbar-brand" href="/">Girls Society</a>

            <!-- Toggle Button for Mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">

                    <!-- Regular Links -->
                    <li class="nav-item">
                        <a class="nav-link" href="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="evenet">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact">Contact</a>
                    </li>

                    <!-- Dropdown Link -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  href="#" id="" role=""
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Join Now
                        </a>
                        <div class="dropdown-menu" aria-labelledby="">
                            <a class="dropdown-item" href="#">Become a Member</a>
                            <a class="dropdown-item" href="#">Events RSVP</a>
                            <a class="dropdown-item" href="#">Member Login</a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    @show
  
    <!-- Bootstrap JS Bundle (Popper included) -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->
</body>

</html>

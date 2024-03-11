<!DOCTYPE html>
<html lang="en">

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{asset('asset/images/logo1.png')}}">
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
            <a class="navbar-brand" href="/">G<img src="asset/images/logo1.png" style="width:50px;">S</a>

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
                        <a class="nav-link" href="event">Events</a>
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
                            <a class="dropdown-item" href="bam">Become a Member</a>
                            <a class="dropdown-item" href="ersvp">Events RSVP</a>
                            <a class="dropdown-item" href="ml">Member Login</a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    @show
   
    @section('footer')
    <!-- Footer Section -->
    <footer class="footer">
            <div class="copyright">
                &copy; 2024 Girls Society. All rights reserved. | Designed with ❤️ Germany Lungay  | Follow me | <a href="https://github.com/germanybasillo" target="_blank"><i class="bi bi-github"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
  <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
</svg></i></a>
            </div>
        </div>
    </footer>
    @show
    <!-- Bootstrap JS Bundle (Popper included) -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->
</body>

</html>
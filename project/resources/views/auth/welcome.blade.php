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
            <a class="navbar-brand" href='welcome'>G<img src="asset/images/logo1.png" style="width:50px;">S</a>

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
                        <a class="nav-link" href='home'>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='about'>About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='event'>Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='blog'>Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='contact'>Contact</a>
                    </li>

                    <!-- Dropdown Link -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  href="#" id="" role=""
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Member Pack
                        </a>
                        <div class="dropdown-menu" aria-labelledby="">
                            <a class="dropdown-item" href="bam">Become a Member</a>
                            <a class="dropdown-item" href="ersvp">Events RSVP</a>
                            <!-- <a class="dropdown-item" href="ml">Member Login</a>
                            <a class="dropdown-item" href="register">Register</a> -->
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  href="#" id="" role=""
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{$data->name}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="">
                            <a class="dropdown-item" href='logout'>Log Out</a>
                        </div>
                    </li>
                </ul>   
            </div>
        </div>
    </nav>
    @show
    @section('hero')
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1 class="display-4">Empowering Girls, Building Futures</h1>
            <p class="lead">Join the community and be part of a supportive network of amazing girls making a difference.</p>
            <a href='ersvp' class="btn btn-primary btn-lg">Event RSVP</a>
        </div>
    </section>
    @show

    @section('about')
      <!-- About Us Section -->
      <section class="about-section">
        <div class="container">
            <!-- Mission and Values -->
            <div class="mission-values">
                <h2>Mission Statement</h2>
                <p>Empowering girls to thrive, lead, and make a positive impact on their communities.</p>

                <h2>Core Values</h2>
                <p>We are committed to fostering growth, inclusivity, and resilience in every girl we serve.</p>
            </div>

            <!-- Team Members -->
            <div class="team-members">
                <h2>Meet Our Team</h2>

                <!-- Team Member 1 -->
                <div class="team-member">
                    <img src="asset/images/201.jpg" alt="Team Member 1">
                    <h3>Emily Johnson</h3>
                    <p>Founder & CEO</p>
                    <p>Passionate about empowering girls and creating positive change.</p>
                </div>

                <!-- Team Member 2 -->
                <div class="team-member">
                    <img src="asset/images/202.jpg" alt="Team Member 2">
                    <h3>Alice Williams</h3>
                    <p>Community Outreach Coordinator</p>
                    <p>Dedicated to building strong connections within the community.</p>
                </div>

                <!-- Team Member 3 -->
                <div class="team-member">
                    <img src="asset/images/203.jpg" alt="Team Member 3">
                    <h3>Grace Rodriguez</h3>
                    <p>Educational Programs Manager</p>
                    <p>Committed to providing educational opportunities for girls.</p>
                </div>
            </div>
        </div>
    </section>
    @show

    @section('event')
     <!-- Events Section -->
     <section class="events-section">
        <div class="container">
            <h2>Upcoming Events</h2>

            <!-- Upcoming Events Cards -->
            <div class="upcoming-events">
                <!-- Event 1 -->
                <div class="event-card">
                    <img src="asset/images/204.jpg" alt="Event 1">
                    <div class="event-card-body">
                        <h3 class="event-title">Girls Empowerment Workshop</h3>
                        <p class="event-details">Date: March 15, 2024<br>Time: 2:00 PM - 5:00 PM<br>Location: Community Center</p>
                        <div class="cta-join">
                            <button class="btn btn-join">Join Now</button>
                        </div>
                    </div>
                </div>

                <!-- Event 2 -->
                <div class="event-card">
                    <img src="asset/images/205.jpg" alt="Event 2">
                    <div class="event-card-body">
                        <h3 class="event-title">Leadership Summit for Girls</h3>
                        <p class="event-details">Date: April 10, 2024<br>Time: 3:30 PM - 7:00 PM<br>Location: Conference Hall</p>
                        <div class="cta-join">
                            <button class="btn btn-join">Join Now</button>
                        </div>
                    </div>
                </div>

                <!-- Event 3 -->
                <div class="event-card">
                    <img src="asset/images/206.jpg" alt="Event 3">
                    <div class="event-card-body">
                        <h3 class="event-title">Community Outreach Day</h3>
                        <p class="event-details">Date: May 5, 2024<br>Time: 10:00 AM - 2:00 PM<br>Location: Various Locations</p>
                        <div class="cta-join">
                            <button class="btn btn-join">Join Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @show

    @section('blog')
     <!-- Blog/News Section -->
     <section class="blog-section">
        <div class="container">
            <h2>Latest Articles</h2>

            <!-- Article List -->
            <div class="article-list">
                <!-- Article 1 -->
                <div class="col-md-4">
                    <div class="article-card">
                        <img src="asset/images/207.jpg" alt="Article 1">
                        <div class="article-card-body">
                            <h3 class="article-title">Empowering Girls Through Education</h3>
                            <p class="article-details">Published on: March 10, 2024<br>Author: Jane Doe</p>
                            <div class="cta-read-more">
                                <button class="btn btn-read-more">Read More</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Article 2 -->
                <div class="col-md-4">
                    <div class="article-card">
                        <img src="asset/images/208.jpg" alt="Article 2">
                        <div class="article-card-body">
                            <h3 class="article-title">Building Confidence in Teenage Girls</h3>
                            <p class="article-details">Published on: March 5, 2024<br>Author: John Smith</p>
                            <div class="cta-read-more">
                                <button class="btn btn-read-more">Read More</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Article 3 -->
                <div class="col-md-4">
                    <div class="article-card">
                        <img src="asset/images/209.jpg" alt="Article 3">
                        <div class="article-card-body">
                            <h3 class="article-title">Fostering Leadership Skills in Girls</h3>
                            <p class="article-details">Published on: February 28, 2024<br>Author: Emily Johnson</p>
                            <div class="cta-read-more">
                                <button class="btn btn-read-more">Read More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
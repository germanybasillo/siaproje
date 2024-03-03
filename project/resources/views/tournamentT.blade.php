<!DOCTYPE html>
<html lang="en">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('asset/images/logo.png')}}">
    <link rel="stylesheet" href="{{asset('asset/bootstrap/icons/font/bootstrap-icons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <script src="{{asset('asset/js/jquery.js')}}"></script>
    <script src="{{asset('asset//js/jsfunction.js')}}"></script>

    <head>
        <title>Dota2 - @yield('title')</title>
    </head>

<body>



@section('header')
<header class="dark-header">
    <div class="container">
    <a href="/"><img src="asset/images/logo.png" alt="Dota 2 Logo" class="logo"></a>
      <nav>
        <ul>
        <li><a href="home">Home</a></li>
          <li><a href="about">About</a></li>
          <li><a href="heroes">Heroes</a></li>
          <li><a href="tournaments">Tournaments</a></li>
          <li><a href="news">News</a></li>
          <li><a href="contact">Contact</a></li>
        </ul>
      </nav>
    </div>
    @show

    @section('events')
<section class="tournaments-section">
    <div class="container">
      <h2>Upcoming Tournaments</h2>
      <div class="event-list">
        <div class="event">
          <h3>Tournament Name 1</h3>
          <p>Date: April 15, 2024</p>
          <p>Location: Online</p>
          <a href="#">More Details</a>
        </div>
        <div class="event">
          <h3>Tournament Name 2</h3>
          <p>Date: May 5, 2024</p>
          <p>Location: Arena City</p>
          <a href="#">More Details</a>
        </div>
        <!-- Add more events as needed -->
      </div>
    </div>
  </section>
@show


@section('about')
<section class="about-section">
    <div class="hh">
      <div class="welcome-message">
        <h2>Welcome to Dota 2 Universe</h2>
        <p>Experience the thrill of battle, strategic gameplay, and the ever-evolving world of Dota 2. Dive into a realm where heroes clash, and only the strongest survive.</p>
      </div>
      <div class="why-dota2">
        <h3>Why Dota 2?</h3>
        <p>Dota 2 stands out with its:</p>
        <ul>
          <li>Deep and strategic gameplay</li>
          <li>Diverse cast of heroes with unique abilities</li>
          <li>Thriving esports scene and tournaments</li>
          <li>Constant updates and community engagement</li>
        </ul>
        <p>Join millions of players worldwide in the ultimate battle for supremacy!</p>
      </div>
    </div>
  </section>
@show

@section ('featuredhero')

<section class="featured-heroes">
    <div class="container">
      <h2>Featured Heroes</h2>
      <div class="heroes-carousel">
        <div class="hero">
          <img src="asset/images/1.jpg" alt="Hero 1">
          <h3>Boa Hancack</h3>
          <p>Stone Power</p>
          <a href="#">Learn More</a>
        </div>
        <div class="hero">
          <img src="asset/images/2.jpg" alt="Hero 2">
          <h3>Nami</h3>
          <p>Lightning Power</p>
          <a href="#">Learn More</a>
        </div>
        <!-- Add more heroes as needed -->
      </div>
    </div>
  </section>
@show

@section('news')
<section class="latest-news-section">
    <div class="container">
      <h2>Latest News</h2>
      <div class="news-highlights">
        <div class="news">
          <img src="asset/images/" alt="News Image 1">
          <div class="news-content">
            <h3>Major Patch Update Released</h3>
            <p class="date">Published on March 10, 2024</p>
            <p>Discover the latest changes, hero updates, and gameplay improvements in the recent major patch.</p>
            <a href="#">Read More</a>
          </div>
        </div>
        <div class="news">
          <img src="asset/images/" alt="News Image 2">
          <div class="news-content">
            <h3>New Esports Tournament Announced</h3>
            <p class="date">Published on February 25, 2024</p>
            <p>Exciting news for Dota 2 fans! A new esports tournament with a massive prize pool has been officially announced.</p>
            <a href="#">Read More</a>
          </div>
        </div>
        <!-- Add more news highlights as needed -->
      </div>
    </div>
  </section>
  @show

  @section('user')
  <section class="community-section">
    <div class="container">
      <h2>Join the Dota 2 Community</h2>
      
      <div class="testimonials">
        <div class="testimonial">
          <p>"Dota 2 has provided me with endless hours of excitement. The diverse hero pool and strategic gameplay keep me coming back for more!"</p>
          <p class="user">- John Doe</p>
        </div>
        <div class="testimonial">
          <p>"Being part of the Dota 2 community has not only improved my gaming skills but also introduced me to an incredible group of friends. It's more than a game; it's a family."</p>
          <p class="user">- Jane Smith</p>
        </div>
        <!-- Add more testimonials as needed -->
      </div>
      
      <div class="social-media">
        <h3>Connect with us on social media:</h3>
        <div class="social-icons">
          <a href="#" class="social-icon"><img src="facebook-icon.png" alt="Facebook"></a>
          <a href="#" class="social-icon"><img src="twitter-icon.png" alt="Twitter"></a>
          <a href="#" class="social-icon"><img src="instagram-icon.png" alt="Instagram"></a>
          <!-- Add more social media icons as needed -->
        </div>
      </div>

    </div>
  </section>
  @show

  @section('playnow')
  <section class="cta-section">
    <div class="container">
      <h2>Join the Battle Now!</h2>
      <p>Download or play Dota 2 and experience the ultimate gaming adventure.</p>
      <div class="cta-buttons">
        <a href="#" class="cta-button download-button">Download Now</a>
        <a href="#" class="cta-button playnow-button">Play Now</a>
      </div>
    </div>
  </section>
  @show

  @section('footer')

  <footer class="dark-footer">
    <div class="container">
      <div class="footer-content">
        <div class="contact-info">
          <h3>Contact Information</h3>
          <p>Email: contact@dota2universe.com</p>
          <p>Phone: +1 (555) 123-4567</p>
          <p>Address: 123 Gaming Street, GameCity</p>
        </div>
        <div class="quick-links">
          <h3>Quick Links</h3>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Heroes</a></li>
            <li><a href="#">Tournaments</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  @show

</body>
</html>
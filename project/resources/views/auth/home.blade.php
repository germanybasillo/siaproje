<style>
   /* Custom CSS for Home Content */
   body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f8f8f8;
            color: #333;
        }
        section, header {
            padding: 40px;
            text-align: center;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            margin: 20px;
        }
        h1, h2 {
            color: #ff80ab;
        }
        p {
            line-height: 1.6;
            font-size: 18px;
            color: #555;
        }
        a {
            color: #ff80ab;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease-in-out;
        }
        a:hover {
            color: #ff5470;
        }
        .cta-buttons {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }
        .cta-buttons a {
            margin: 0 20px;
            padding: 15px 30px;
            border-radius: 5px;
            background-color: #ff4d6d;
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            text-align: center;
            text-decoration: none;
            transition: background-color 0.3s ease-in-out;
        }
        .cta-buttons a:hover,
        .cta-buttons a:focus {
            background-color: #ff3b5a;
            border-color: #ff3b5a;
        }
    </style>
@extends('template.content')
@section('title','HOME')

@section('content')
<div class = "container text-center">
<header>
        <h1>Welcome to Girls Society</h1>
        <p>Empowering Girls, Building Futures</p>
        <!-- You can add a logo or image here -->
    </header>

    <section>
        <h2>About Us</h2>
        <p>Girls Society is a dynamic community committed to empowering girls and creating a supportive environment for growth and success. Our mission is to [briefly state the main goal or purpose of the society].</p>
        <a href='about'>Learn more about us</a>
    </section>

    <section>
        <h2>Join the Movement</h2>
        <div class="cta-buttons">
            <a href="get-involved.html">Get Involved</a>
            <a href="calendar.html">View Calendar</a>
        </div>
    </section>

    <section>
        <h2>Our Impact</h2>
        <p>Discover the stories of girls whose lives have been positively impacted by Girls Society. <a href="success-stories.html">Read Success Stories</a></p>
    </section>

    <section>
        <h2>Educational Initiatives</h2>
        <p>Explore our educational programs focused on [mention specific areas, e.g., leadership development, STEM education, etc.]. <a href="educational-programs.html">Learn More</a></p>
    </section>

    <section>
        <h2>Community Engagement</h2>
        <p>We believe in the power of community. Discover how we engage with and contribute to the local community. <a href="community-initiatives.html">Explore Community Initiatives</a></p>
    </section>

    <section>
        <h2>Connect With Us</h2>
        <p>Stay updated on our latest news, events, and initiatives. Follow us on social media or subscribe to our newsletter.</p>
        <!-- Add social media icons and links here -->
    </section>

    <section>
        <h2>Contact Us</h2>
        <p>Have questions or want to connect with Girls Society? We'd love to hear from you. <a href='contact'>Contact Information</a></p>
    </section>

    <section>
        <h2>Support Us</h2>
        <p>Help us make a difference in the lives of girls. Donate or become a sponsor to support our programs and initiatives. <a href="support-us.html">Support Us</a></p>
    </section>
</div>
@endsection

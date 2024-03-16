<style>
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
        .team-members {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }
        .team-member {
            max-width: 300px;
            text-align: center;
        }
        .testimonial {
            margin-top: 30px;
        }
    </style>
@extends('auth.templete')
@section('title')
ABOUT
@endsection


@section('header')
@parent
<div class = "container text-center">
<header>
        <h1>About Us - Girls Society</h1>
        <!-- You can add a logo or image here -->
    </header>
    <section>
        <h2>Our Mission</h2>
        <p>Girls Society is on a mission to empower and uplift girls, fostering an environment of growth, confidence, and community support. We believe in creating opportunities for every girl to thrive and succeed.</p>
    </section>

    <section>
        <h2>Our Values</h2>
        <p>At Girls Society, we are guided by the following core values:</p>
        <ul>
            <li><strong>Empowerment:</strong> Empowering girls to discover their potential and lead with confidence.</li>
            <li><strong>Inclusivity:</strong> Embracing diversity and creating a supportive space for all girls.</li>
            <li><strong>Educational Excellence:</strong> Providing quality education and resources for skill development.</li>
            <li><strong>Community Impact:</strong> Engaging with and positively contributing to our local community.</li>
        </ul>
    </section>

    <section>
        <h2>Meet Our Team</h2>
        <div class="team-members">
            <div class="team-member">
                <!-- Add an image of the team member -->
                <h3>Founder's Name</h3>
                <p>Founder & President</p>
            </div>
            <!-- Add more team members as needed -->
        </div>
    </section>

    <section>
        <h2>What People Say About Us</h2>
        <div class="testimonial">
            <p>"Girls Society has been a transformative experience for my daughter. She gained confidence, made lifelong friends, and discovered her passion for [mention a program or initiative]."</p>
            <p>- Parent Name</p>
        </div>
        <!-- Add more testimonials as needed -->
    </section>
</div>
@endsection

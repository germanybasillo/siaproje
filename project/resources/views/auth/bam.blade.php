<style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f8f8f8;
            color: #333;
        }
        section, header{
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
        .benefits {
            margin-top: 30px;
        }
        .application-process {
            margin-top: 30px;
        }
        .cta-buttons {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }
        .cta-buttons a {
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
@extends('auth.content')
@section('title','HOME')

@section('content')
<div class = "container text-center">
<header>
        <h1>Become a Member - Girls Society</h1>
        <!-- You can add a logo or image here -->
    </header>
<section>
        <h2>Why Join Girls Society?</h2>
        <div class="benefits">
            <p>By becoming a member of Girls Society, you gain access to a supportive community that offers:</p>
            <ul>
                <li>Empowering events and workshops</li>
                <li>Mentorship programs</li>
                <li>Networking opportunities</li>
                <li>Education and skill development programs</li>
                <li>A platform to make a positive impact in the community</li>
            </ul>
        </div>
    </section>

    <section>
        <h2>Application Process</h2>
        <div class="application-process">
            <p>Ready to join us? Follow these simple steps:</p>
            <ol>
                <li>Fill out the online membership application form.</li>
                <li>Our team will review your application.</li>
                <li>If approved, you'll receive a welcome package and details on upcoming events.</li>
            </ol>
        </div>
    </section>

    <section>
        <h2>Ready to Take the Next Step?</h2>
        <div class="cta-buttons">
            <a href="register">Apply Now</a>
        </div>
    </section>
</div>
@endsection

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
        .event {
            margin-top: 30px;
        }
        .event img {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 10px;
        }
        .event-details {
            text-align: left;
        }
    </style>
@extends('template.content')
@section('title','HOME')

@section('content')
<div class = "container text-center">
<header>
        <h1>Events - Girls Society</h1>
        <!-- You can add a logo or image here -->
    </header>
    <section>
        <h2>Upcoming Events</h2>
        <div class="event">
            <img src="/asset/images/223.jpg" alt="Event Image">
            <div class="event-details">
                <h3>Event Title</h3>
                <p>Date: [Event Date]</p>
                <p>Time: [Event Time]</p>
                <p>Location: [Event Location]</p>
                <p><a href="event-details.html">Learn More</a></p>
            </div>
        </div>
        <!-- Add more upcoming events as needed -->
    </section>

    <section>
        <h2>Past Events</h2>
        <div class="event">
            <img src="/asset/images/224.jpg" alt="Past Event Image">
            <div class="event-details">
                <h3>Past Event Title</h3>
                <p>Date: [Past Event Date]</p>
                <p>Location: [Past Event Location]</p>
                <p><a href="past-event-details.html">View Recap</a></p>
            </div>
        </div>
        <!-- Add more past events as needed -->
    </section>

    <section>
        <h2>Event Calendar</h2>
        <!-- Add an embedded calendar or link to a calendar page -->
        <p><a href="event-calendar.html">View Full Calendar</a></p>
    </section>

</div>
@endsection

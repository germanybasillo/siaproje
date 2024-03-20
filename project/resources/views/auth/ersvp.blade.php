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
        .event-details {
            margin-top: 30px;
        }
        .rsvp-form {
            margin-top: 30px;
            text-align: left;
        }
        .confirmation-message {
            margin-top: 30px;
            display: none;
        }
        .confirmation-message p {
            color: #4caf50;
            font-weight: bold;
        }

        .button{
            background-color: #ff4d6d;
            transition: background-color 0.3s ease-in-out;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .button:hover,
        .button:focus{
            background-color: #ff3b5a;
            border-color: #ff3b5a;
        }
    </style>
@extends('auth.content')
@section('title','HOME')

@section('content')
<div class = "container text-center">
<header>
        <h1>Event RSVP - Girls Society</h1>
        <!-- You can add a logo or image here -->
    </header>

    <section>
        <div class="event-details">
            <h2>Event Details</h2>
            <p><strong>Event:</strong> [Event Name]</p>
            <p><strong>Date:</strong> [Event Date]</p>
            <p><strong>Time:</strong> [Event Time]</p>
            <p><strong>Location:</strong> [Event Location]</p>
        </div>

        <div class="rsvp-form">
            <h2>RSVP Form</h2>
            <form action="rsvp-handler.php" method="post">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="attendees">Number of Attendees:</label>
                <input type="number" id="attendees" name="attendees" min="1" required>

                <input type="submit" class="button" value="RSVP">
            </form>
        </div>

        <div class="confirmation-message" id="confirmationMessage">
            <p>Thank you for RSVPing to [Event Name]! We look forward to seeing you there.</p>
        </div>
    </section>

</div>
<script>
        // Assuming you have a JavaScript file or inline script to handle form submission and show/hide confirmation message
        // Example:
        document.addEventListener('DOMContentLoaded', function () {
            const rsvpForm = document.querySelector('.rsvp-form');
            const confirmationMessage = document.getElementById('confirmationMessage');

            rsvpForm.addEventListener('submit', function (event) {
                event.preventDefault();
                // Handle form submission (send data to server, etc.)

                // Show confirmation message
                rsvpForm.style.display = 'none';
                confirmationMessage.style.display = 'block';
            });
        });
    </script>
@endsection

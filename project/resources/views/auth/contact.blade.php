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
        label {
            display: block;
            margin: 10px 0;
            font-weight: bold;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
        }
        button {
            background-color: #ff4d6d;
            transition: background-color 0.3s ease-in-out;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover,
        button:focus {
            background-color: #ff3b5a;
            border-color: #ff3b5a;
        }
        iframe {
            width: 100%;
            height: 300px;
            border: 0;
            border-radius: 10px;            
            margin-top: 20px;
        }
    </style>

@extends('auth.templete')
@section('title')
CONTACT
@endsection


@section('header')
@parent
<div class = "container text-center">
<header>
        <h1>Contact Us - Girls Society</h1>
        <!-- You can add a logo or image here -->
    </header>

    <section>
        <h2>Get in Touch</h2>
        <p>If you have any questions or feedback, feel free to reach out to us. We'd love to hear from you!</p>

        <form id="contactForm" onsubmit="return submitForm()">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Your Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit" style="margin-top:20px;">Send Message</button>
        </form>
    </section>

    <section>
        <h2>Contact Information</h2>
        <p><strong>Email:</strong> info@girlssociety.org</p>
        <p><strong>Phone:</strong> +1 (555) 123-4567</p>
        <p><strong>Address:</strong> 123 Girls Avenue, Cityville, State, 12345</p>
    </section>

    <section>
        <h2>Visit Us</h2>
        <p>Feel free to drop by our office. Here's our location on the map:</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12345.678901234567!2d-74.000000!3d40.000000!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzDCsDQ2JzA4LjEiTiA3NMKwMjgnMzkuNyJX!5e0!3m2!1sen!2sus!4v1234567890123!5m2!1sen!2sus" allowfullscreen></iframe>
    </section>
</div>
<script>
        function submitForm() {
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var message = document.getElementById('message').value;

            // Perform client-side validation, you may want to add more sophisticated validation
            if (name === '' || email === '' || message === '') {
                alert('Please fill in all fields.');
                return false;
            }

            // Here, you can submit the form to the server for further processing
            // For a complete contact form, you'd typically use server-side scripting (e.g., PHP, Node.js)
            // to handle the form data, send emails, or store messages in a database.

            // For now, let's just display a success message
            alert('Message sent successfully!');
            return true;
        }
    </script>
@endsection

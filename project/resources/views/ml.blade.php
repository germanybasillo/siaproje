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
            margin: 20px auto;
            width: 300px;
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
        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
        }
        button {
            background-color: #ff80ab;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #ff5470;
        }
        </style>
@extends('templete')
@section('title')
MEMBER_LOGIN
@endsection

@section('header')
@parent
<div class = "container text-center">
<header>
        <h1>Member Login - Girls Society</h1>
        <!-- You can add a logo or image here -->
    </header>

    <section>
        <form id="loginForm" onsubmit="return validateForm()">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>
    </section>
</div>
<script>
        function validateForm() {
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;

            // Perform client-side validation, you may want to add more sophisticated validation
            if (username === '' || password === '') {
                alert('Please enter both username and password.');
                return false;
            }

            // Here, you can submit the form to the server for further authentication
            // For a complete login system, you'd typically use server-side scripting (e.g., PHP, Node.js)
            // to verify the credentials and set session cookies.

            // For now, let's just display a success message
            alert('Login successful!');
            return true;
        }
    </script>
@endsection

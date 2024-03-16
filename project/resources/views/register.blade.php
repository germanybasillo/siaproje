<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 500px;
            margin: 100px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .btni{
            background-color: #ff3b5a;
            color: #ffffff; /* White text color */
            width: 100%;
            border: none;
            padding: 10px 0;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .btni:hover,
        .btni:focus{
        background-color: #ff3b5a;
            border-color: #ff3b5a;
    }
    </style>
@extends('templete')
@section('title')
Register
@endsection

@section('header')
@parent
<div class = "container text-center">
    <h1>Girls Society</h1>
<div class="container">
        <h2 class="text-center mb-4">Register</h2>
        <form>
            <div class="form-group">
                <label for="fullName">Full Name</label>
                <input type="text" class="form-control" id="fullName" placeholder="Enter your full name" required>
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirm Password</label>
                <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password" required>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="agreeTerms" name="admin">
                <label class="form-check-label" for="agreeTerms">Check if you are the admin.</label>
            </div>
            <button type="submit" class="btni">Register</button>
        </form>
    </div>
</div>
@endsection
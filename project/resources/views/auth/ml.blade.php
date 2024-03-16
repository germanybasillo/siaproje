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
MEMBER_LOGIN
@endsection

@section('header')
@parent
<div class = "container text-center">
    <h1>Girls Society</h1>
    <div class="container">
        <h2 class="text-center mb-4">Member-Login</h2>
        <form>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btni">Login</button>
            <br>
            <a href="register">Not Member yet!! Register Here.</a>
        </form>
    </div>
</div>
@endsection

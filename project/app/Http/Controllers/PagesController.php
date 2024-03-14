<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function welcome()
    {
        return view('welcome');
    }

    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function blog()
    {
        return view('blog');
    }

    public function event()
    {
        return view('event');
    }

    public function bam()
    {
        return view('bam');
    }

    public function ersvp()
    {
        return view('ersvp');
    }

    public function ml()
    {
        return view('ml');
    }

    public function register()
    {
        return view('register');
    }
}


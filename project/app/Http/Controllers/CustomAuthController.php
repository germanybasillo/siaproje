<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class CustomAuthController extends Controller
{
    public function ml()
    {
        return view("auth.ml");
    }

    public function register()
    {
        return view("auth.register");
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:10|confirmed',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();

        if ($res) {
            return back()->with('success', 'You have become a member now');
        } else {
            return back()->with('fail', 'Failed to become a member');
        }
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('loginId', $user->id);
                return redirect()->route('home');
            } else {
                return back()->with('fail', 'Password does not match.');
            }
        } else {
            return back()->with('fail', 'This email is not registered.');
        }
    }

    public function logout()
    {
        Session::forget('loginId');
        return redirect('/');
    }

    public function home(Request $request)
    {
        $data = null;
        if (Session::has('loginId')) {
            $data = User::find(Session::get('loginId'));
        }
        return view('auth.home', compact('data'));
    }

    public function about(Request $request)
    {
        $data = null;
        if (Session::has('loginId')) {
            $data = User::find(Session::get('loginId'));
        }
        return view('auth.about', compact('data'));
    }

    public function contact(Request $request)
    {
        $data = null;
        if (Session::has('loginId')) {
            $data = User::find(Session::get('loginId'));
        }
        return view('auth.contact', compact('data'));
    }

    public function event(Request $request)
    {
        $data = null;
        if (Session::has('loginId')) {
            $data = User::find(Session::get('loginId'));
        }
        return view('auth.event', compact('data'));
    }

    public function ersvp(Request $request)
    {
        $data = null;
        if (Session::has('loginId')) {
            $data = User::find(Session::get('loginId'));
        }
        return view('auth.ersvp', compact('data'));
    }

    public function welcome(Request $request)
    {
        $data = null;
        if (Session::has('loginId')) {
            $data = User::find(Session::get('loginId'));
        }
        return view('auth.welcome', compact('data'));
    }

    public function blog(Request $request)
    {
        $data = null;
        if (Session::has('loginId')) {
            $data = User::find(Session::get('loginId'));
        }
        return view('auth.blog', compact('data'));
    }

    public function bam(Request $request)
    {
        $data = null;
        if (Session::has('loginId')) {
            $data = User::find(Session::get('loginId'));
        }
        return view('auth.bam', compact('data'));
    }
}


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
    $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6|max:10 confirmed',
    ];

        $user = new User();
        $user ->name = $request ->name;
        $user ->email = $request ->email;
        $user ->password = Hash::make($request ->password);
        $res = $user->save();

        if($res){
            return back()->with('success','You become a member now');
        }else{
            return back()->with('fail','Failed become a member');
        }
        
    }


    public function loginUser(Request $request)
    {
            $request->validate([
                'email'=>'required |email',
                'password'=>'required',
            ]);
           $user = User::where('email', '=', $request->email)->first();
           if($user) {
            if(Hash::check($request->password,$user->password)){
                $request->session()->put('loginId',$user->id);
                return redirect('home');
            }else{
                return back()->with('fail','Password not matches.');
            }
        }else{
            return back()->with('fail','This email is not registered.');
    }
}

public function logout(){
    if(Session::has('loginId')){
        Session::pull('loginId');
        return redirect('ml');
    }
}

public function home(Request $request)
    {
        $data =array();
        if(Session::has('loginId')){
            $data = User::where('id', '=',Session::get('loginId'))->first();
        }
        return view('auth.home', compact('data'));

}

public function about(Request $request)
    {
        $data =array();
        if(Session::has('loginId')){
            $data = User::where('id', '=',Session::get('loginId'))->first();
        }
        return view('auth.about', compact('data'));

}

public function contact(Request $request)
    {
        $data =array();
        if(Session::has('loginId')){
            $data = User::where('id', '=',Session::get('loginId'))->first();
        }
        return view('auth.contact', compact('data'));

    }

        public function event(Request $request)
    {
        $data =array();
        if(Session::has('loginId')){
            $data = User::where('id', '=',Session::get('loginId'))->first();
        }
        return view('auth.event', compact('data'));
}

public function ersvp(Request $request)
{
    $data =array();
    if(Session::has('loginId')){
        $data = User::where('id', '=',Session::get('loginId'))->first();
    }
    return view('auth.ersvp', compact('data'));
}

public function welcome(Request $request)
{
    $data =array();
    if(Session::has('loginId')){
        $data = User::where('id', '=',Session::get('loginId'))->first();
    }
    return view('auth.welcome', compact('data'));
}

public function blog(Request $request)
{
    $data =array();
    if(Session::has('loginId')){
        $data = User::where('id', '=',Session::get('loginId'))->first();
    }
    return view('auth.blog', compact('data'));
}

public function bam(Request $request)
{
    $data =array();
    if(Session::has('loginId')){
        $data = User::where('id', '=',Session::get('loginId'))->first();
    }
    return view('auth.bam', compact('data'));
}

}
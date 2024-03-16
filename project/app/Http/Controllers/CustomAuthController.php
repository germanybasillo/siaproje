<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
            'name'=>'required',
            'email'=>'required |email |unique:users',
            'password'=>'required |min:5 |max:10'
        ]);
        $user = new User();
        $user ->name = $request ->name;
        $user ->email = $request ->email;
        $user ->password = $request ->password;
        $res = $user->save();
        if($res){
            return back()->with('success','You have a member now');
        }else{
            return back()->with('fail','Failed become a member');
        }
        
    }
}


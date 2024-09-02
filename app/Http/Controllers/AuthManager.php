<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthManager extends Controller
{
    public function login()
    {
        return view("login");
    }

    public function registration()
    {
        return view("registration");
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {  
            return redirect()->intended(route(name:'home'))->with('success','login successful'); 
        } 
        return redirect(route(name:'login'))->with('error','login details are not valid ');
    }
}

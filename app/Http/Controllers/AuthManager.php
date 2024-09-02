<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Ensure that the User model is imported

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
            return redirect()->intended(route('home'))->with('success', 'Login successful');
        }
        return redirect(route('login'))->with('error', 'Login details are not valid');
    }

    public function registrationPost(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);

        $user = User::create($data);

        if (!$user) {
            return redirect(route('registration'))->with('error', 'Registration failed, please try again.');
        }

        return redirect(route('login'))->with('success', 'Registration successful, please login.');
    }
    function logout(){
      session::flush();
      auth::logout();
      return redirect(route('login'));
    }
}

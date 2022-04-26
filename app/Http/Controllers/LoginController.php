<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Hash;

class LoginController extends Controller
{
    public function index()
    {
    	return view('index');
    }

  
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
 
        // $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return redirect('/login')->with('loginError', 'Oppes! You have entered invalid credentials');
    }

}

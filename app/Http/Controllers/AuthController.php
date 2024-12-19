<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illminate\Suppolrt\Facades\Password;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials=$request->only('email','password');
        if (Auth::attempt($credentials)){
            return redirect()->inended('/dashboard');
        }
        return back()->with('error','Invalid Credentials.');
    }
    public function showForgotPasswordForm()
        {
            return view('auth.forgot_password');
        }
    public function sendResetLink(Request $request)
    {
        $request->validate(['email'=>'required|email']);
        $status=Password::sendResetLink($request->only('email'));
        return $status===Password::RESET_LINK_SENT ? back()->with('status',__($status)): back()->withErrors(['email'=>__($status)]);
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Auth;

class UserLoginController extends Controller
{
    public function index()
    {
        if(Auth::check())
        {
            return redirect()->route('home');
        }

        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'nip/nik'   => 'required',
            'password'  => 'required'
        ]);

        if(Auth::attempt($request->only('nip/nik','password')))
        {
            return redirect()->route('login');
        }

        return redirect('/login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.index');
    }
}

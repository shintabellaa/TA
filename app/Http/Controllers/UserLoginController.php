<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Session;

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
            'nip_nik'   => 'required',
            'password'  => 'required'
        ]);

        if(Auth::attempt($request->only('nip_nik','password')))
        {
            return redirect()->route('login')->with(['error' => 'Data Berhasil Disimpan']);
        }

        return redirect('/login')->with(['error' => 'Data Berhasil Disimpan']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.index');
    }
}

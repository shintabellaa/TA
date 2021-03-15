<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class Profilcontroller extends Controller
{
    public function profil()
    {
       $user=Auth::user();
        return view('profil', compact('user'));
    }
    //
}

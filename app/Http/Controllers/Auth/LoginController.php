<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    // public function redirectTo() {
    //     $role = Auth::user()->role_id;
    //     if($role == 2){
    //         return redirect()->route('pro');
    //     }else{
    //         return redirect()->route('home');
    //     }
    //   }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'nip_nik';
    }

    public function login(Request $request){
        if($this->attemptLogin($request) == false){
            return redirect()->back() ->with(['error' => 'Username atau Password Salah !']);
        }else{
            if(Auth::user()->role_id == 1){
                return redirect()->route('home');
            }
            elseif(Auth::user()->role_id == 2){
                return redirect()->route('pro');
            }
        }
    }
}

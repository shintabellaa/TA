<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Session;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */

    public function handle($request, Closure $next, $guard = null)
    {
            if(Auth::guard($guard)->check()){
                if(Auth::user()->role_id == 1){
                    return redirect()->route('home');
                }
                elseif(Auth::user()->role_id == 2){
                    return redirect()->route('pro');
                }
            }
        // if(Auth::guard($guard)->check() && Auth::user()->role_id == 1){
        //     return redirect()->route('home');
        // }elseif(Auth::guard($guard)->check() && Auth::user()->role_id == 2){
        //     return redirect()->route('pro');
        // }elseif(Auth::guard($guard)->check() == false && Auth::user() == null){
        //     dd('hgugg');
        //     return redirect()->route('login')->$request->session()->flash('error', 'Username atau Password Salah !');
        // }else{
        //     return $next($request);
        // }
        return $next($request);
        // if(Auth::guard($guard)->check() && Auth::user()->role_id == 1) {
        //     dd('ok');
        //       return '/dfsdfsdf';
        // }else if (Auth::guard($guard)->check() && Auth::user()->role_id == 2){
        //       dd('sip');
        //     return '/dsfsdfsd';
        // }else{
        //     return $next($request);
        // }
    }
}

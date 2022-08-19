<?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,...$roles)
    {
        // dd($roles);
        // dd(auth()->user()->role);
        if(in_array(auth()->user()->role->id,$roles))
        {

            return $next($request);
        }
        return redirect()->route('home.index');
    }
}

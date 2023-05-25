<?php

namespace App\Http\Middleware;
use App\Api;
use Closure;

class AuthKey
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // $token = $request->header('APP_KEY');
        // if($token != 'PEGAWAIABCD1234'){
        //     return response()->json(['message' => 'App key not found'], 401);
        // }
        // return $next($request);

            if($request->bearerToken()){
                if(Api::where('token',$request->bearerToken())->first()){
                    return $next($request);
                }
            }
            if($request->has('api-key')){
                if(Api::where('token', $request->input('api-key'))->first()){
                    return $next($request);
                }
            }

            return response('Unauthorized.',401);

    }
}

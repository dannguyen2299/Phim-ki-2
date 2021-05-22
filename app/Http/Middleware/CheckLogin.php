<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Session;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckLogin
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
        // if(Auth::guest()){
        //     redirect()->intended('login'); 
        // }
        if(Session::has('role_id') && Session::get('role_id') !=3){
             return $next($request);
        }else{
             abort(403);
        }
     
    }
}

<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Session;

use Closure;
use role;

class CheckAdmin
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
        if(Session::get('role_id')==1)
            return $next($request);
        else{
            abort(403);
        }
    }
}

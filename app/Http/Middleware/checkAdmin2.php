<?php

namespace App\Http\Middleware;

use Closure;

class checkAdmin2
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
        if(\Auth::user()->role > 2){
//            dd(\Auth::user()->role >2 );
            return back();
        }
        return $next($request);
    }
}
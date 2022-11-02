<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SoloAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //lo agrego daniel
        if (auth::user()->fullacces == 'yes') :
            return $next($request); //si es admin redirige al home
        endif;
            return redirect('viewer'); //si es un usario normal 
    }
}

<?php

namespace App\Http\Middleware;

use Closure;

class Title
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
        $title='Going beyound'; 
        $request->attributes->set('title',$title);      //envoyer un variable dans le controlleur
        return $next($request);

    }
}

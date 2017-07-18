<?php

namespace App\Http\Middleware;

use Closure;

class Authentication
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

        if ($request->header('token')!= 'token'){
            return response()->json('not validated');
        }

        return $next($request);
    }
}

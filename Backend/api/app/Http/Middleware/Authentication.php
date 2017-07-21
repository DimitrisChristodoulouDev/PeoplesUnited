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

        if ($request->header('AuthToken')!= 'token'){
            return response()->json([], 403);
        }else{
            return $next($request);
        }
    }
}

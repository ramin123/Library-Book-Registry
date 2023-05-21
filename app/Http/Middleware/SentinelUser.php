<?php

namespace App\Http\Middleware;

use Closure;
use Redirect;
use Sentinel;

class SentinelUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (! Sentinel::check()) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            }
            return Redirect::route('login');

        
        }
        return $next($request);
    }
}

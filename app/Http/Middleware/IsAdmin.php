<?php

namespace App\Http\Middleware;
use App\Http\Middleware\auth;
use Closure;

class IsAdmin
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
        if ($request->user()->ID_ROLES== '1' ) {
            return $next($request);
        }

        return redirect('/home');
    }
}

<?php

namespace App\Http\Middleware;

use Closure;

class Rollbar
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        \Rollbar::init(config('app.rollbar'), false, false);

        return $next($request);
    }
}

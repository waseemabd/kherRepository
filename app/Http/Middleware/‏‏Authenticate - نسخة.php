<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
//    protected function redirectTo($request)
//    {
//        if (! $request->expectsJson()) {
//            return route('login');
//        }
//    }

    public function handle($request, Closure $next, $guard = 'web')
    {


        if (Auth::guard($guard)->guest()) {
            switch ($guard) {
                case 'admin':
                    return redirect("/admin/login");

            }
        }
        return $next($request);
    }
}

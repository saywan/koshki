<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
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
        if (Auth::guard($guard)->check())
        {
            switch (Auth::user()->role){
                case 'Admin':
                    return redirect()->intended('admin/index');
                    break;
                case 'employeer':
                    return redirect()->route('/User');
                    break;
                default:
                    return  redirect()->route('login');
                    break;
            }

        }
        return $next($request);
       /* if (Auth::guard($guard)->check()) {
            return redirect(RouteServiceProvider::HOME);
        }

        return $next($request);*/
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Hash;

class Admin
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'admin')
    {
        Auth::guard($guard)->attempt(['email' => 'root@gmail.com', 'password' => Hash::make('123qwe')]);
        if (Auth::guard($guard)->check()) {
            return dd('demo');
            //return $next($request);
        }
        return redirect('my_admin/login');
    }

}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $role = Auth::user()->role;

            if ($role == 1) {
                return $next($request);
            } elseif ($role == 2) {
                return redirect('/')->with('error', 'Access denied.');
            }
        }

        return redirect()->route('login')->with('error', 'Please log in.');
    }
}

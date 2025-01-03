<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Jika user tidak login, redirect ke halaman login
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $userRole = Auth::user()->role;

        // Admin
        if ($userRole == 1) {
            return $next($request);
            return redirect()->route('dashboard');
        }
        // mitra
        elseif ($userRole == 2) {
            return redirect()->route('mitra.dashboard');
        }
        // Volunteer
        elseif ($userRole == 3) {
            return redirect()->route('dashboard');
        }

        // Default redirect jika role tidak dikenali
        return redirect()->route('dashboard');
    }
}

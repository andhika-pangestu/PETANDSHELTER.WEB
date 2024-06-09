<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class Volunteer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
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
            return redirect()->route('admin.dashboard');
        }
        // Shelter
        elseif ($userRole == 2) {
            return redirect()->route('shelter.dashboard');
        }
        // Volunteer
        elseif ($userRole == 3) {
            return $next($request);
        }

        // Default redirect jika role tidak dikenali
        return redirect()->route('dashboard');
    }
}

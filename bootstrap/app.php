<?php
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\Mitra;
use App\Http\Middleware\Admin;
use App\Http\Middleware\Volunteer;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'admin' => Admin::class,
            'mitra' => Mitra::class,
            'volunteer' => Volunteer::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        // Tambahkan konfigurasi exceptions di sini
    })
    ->create();

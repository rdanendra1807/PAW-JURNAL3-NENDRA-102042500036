<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
<<<<<<< HEAD
    ->withMiddleware(function (Middleware $middleware): void {
=======
    ->withMiddleware(function (Middleware $middleware) {
>>>>>>> 9bd941d (Commit Setup CeLOE LMS)
        $middleware->alias([
            'role' => \App\Http\Middleware\RoleMiddleware::class,
        ]);
    })
<<<<<<< HEAD
    ->withExceptions(function (Exceptions $exceptions): void {
=======
    ->withExceptions(function (Exceptions $exceptions) {
>>>>>>> 9bd941d (Commit Setup CeLOE LMS)
        //
    })->create();

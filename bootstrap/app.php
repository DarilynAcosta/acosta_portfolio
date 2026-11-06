<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

$app = Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        // Trust Vercel's proxy so HTTPS and client IPs are detected correctly.
        $middleware->trustProxies(at: '*');
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();

// Vercel's filesystem is read-only except /tmp, so relocate writable paths there.
if (env('VERCEL') || isset($_ENV['VERCEL']) || isset($_SERVER['VERCEL'])) {
    $storagePath = env('APP_STORAGE', '/tmp/storage');
    $bootstrapCachePath = '/tmp/bootstrap/cache';

    foreach ([
        $storagePath,
        $storagePath.'/framework',
        $storagePath.'/framework/cache',
        $storagePath.'/framework/cache/data',
        $storagePath.'/framework/sessions',
        $storagePath.'/framework/views',
        $storagePath.'/logs',
        $bootstrapCachePath,
    ] as $directory) {
        if (! is_dir($directory)) {
            mkdir($directory, 0775, true);
        }
    }

    $app->useStoragePath($storagePath);
}

return $app;

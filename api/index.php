<?php

use Illuminate\Http\Request;

$isVercel = getenv('VERCEL') || isset($_ENV['VERCEL']) || isset($_SERVER['VERCEL']);

// Vercel only allows writes to /tmp; prepare writable paths before booting Laravel.
if ($isVercel) {
    $storagePath = '/tmp/storage';
    $bootstrapCachePath = '/tmp/bootstrap/cache';

    foreach ([
        $storagePath,
        $storagePath . '/framework',
        $storagePath . '/framework/cache',
        $storagePath . '/framework/cache/data',
        $storagePath . '/framework/sessions',
        $storagePath . '/framework/views',
        $storagePath . '/logs',
        $bootstrapCachePath,
    ] as $directory) {
        if (! is_dir($directory)) {
            mkdir($directory, 0775, true);
        }
    }

    foreach ([
        'APP_STORAGE' => $storagePath,
        'VIEW_COMPILED_PATH' => $storagePath . '/framework/views',
        'APP_CONFIG_CACHE' => $bootstrapCachePath . '/config.php',
        'APP_EVENTS_CACHE' => $bootstrapCachePath . '/events.php',
        'APP_PACKAGES_CACHE' => $bootstrapCachePath . '/packages.php',
        'APP_ROUTES_CACHE' => $bootstrapCachePath . '/routes.php',
        'APP_SERVICES_CACHE' => $bootstrapCachePath . '/services.php',
        'LOG_CHANNEL' => 'stderr',
        'SESSION_DRIVER' => 'cookie',
        'CACHE_STORE' => 'array',
        'QUEUE_CONNECTION' => 'sync',
    ] as $key => $value) {
        if (getenv($key) === false) {
            putenv("{$key}={$value}");
            $_ENV[$key] = $value;
            $_SERVER[$key] = $value;
        }
    }
}

require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

if ($isVercel) {
    $app->useStoragePath(getenv('APP_STORAGE') ?: '/tmp/storage');
}

try {
    $app->handleRequest(Request::capture());
} catch (\Throwable $e) {
    error_log(sprintf(
        'Uncaught exception: %s in %s:%d',
        $e->getMessage(),
        $e->getFile(),
        $e->getLine()
    ));
    throw $e;
}

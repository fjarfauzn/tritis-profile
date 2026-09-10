<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// 1. Siapkan folder temporary wajib di /tmp
$storageDirs = [
    '/tmp/storage/app/public',
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/bootstrap/cache',
];

foreach ($storageDirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
}

try {
    // 2. Load Autoloader
    require __DIR__ . '/../vendor/autoload.php';

    // 3. Bootstrap Application
    $app = require_once __DIR__ . '/../bootstrap/app.php';

    // 4. Bind Storage Path setelah instance $app terbentuk
    if (is_object($app) && method_exists($app, 'useStoragePath')) {
        $app->useStoragePath('/tmp/storage');
    }

    // 5. Handle Request
    if ($app instanceof Illuminate\Contracts\Http\Kernel) {
        $kernel = $app;
    } else {
        $kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
    }

    $request = Illuminate\Http\Request::capture();
    $response = $kernel->handle($request);

    $response->send();
    $kernel->terminate($request, $response);

} catch (\Throwable $e) {
    echo "<h1>Runtime Exception:</h1>";
    echo "<p><strong>Message:</strong> " . htmlspecialchars($e->getMessage()) . "</p>";
    echo "<p><strong>File:</strong> " . htmlspecialchars($e->getFile()) . " line " . $e->getLine() . "</p>";
    echo "<pre>" . htmlspecialchars($e->getTraceAsString()) . "</pre>";
}

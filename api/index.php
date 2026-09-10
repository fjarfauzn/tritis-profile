<?php

// 1. Muat autoloader composer
require __DIR__ . '/../vendor/autoload.php';

// 2. Inisialisasi aplikasi Laravel
$app = require_once __DIR__ . '/../bootstrap/app.php';

// 3. Buat folder temporary di /tmp untuk Vercel (read-only filesystem)
$storagePaths = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/bootstrap/cache',
];

foreach ($storagePaths as $path) {
    if (!file_exists($path)) {
        mkdir($path, 0755, true);
    }
}

// 4. Set path storage ke /tmp
$app->useStoragePath('/tmp/storage');

// 5. Jalankan aplikasi via Kernel HTTP
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
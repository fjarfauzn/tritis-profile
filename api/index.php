<?php

use Illuminate\Http\Request;

// 1. Load Autoload
require __DIR__ . '/../vendor/autoload.php';

// 2. Buat folder temporary wajib di /tmp
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

// 3. Set Environment Variable Storage
putenv('APP_STORAGE_PATH=/tmp/storage');
$_ENV['APP_STORAGE_PATH'] = '/tmp/storage';

// 4. Inisialisasi Aplikasi Laravel
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Overwrite path storage ke /tmp
$app->useStoragePath('/tmp/storage');

// 5. Jalankan Request lewat HTTP Kernel
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
);

// Kirim Response dan Output Content secara tegas
$response->send();

$kernel->terminate($request, $response);
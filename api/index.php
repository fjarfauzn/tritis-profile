<?php

use Illuminate\Http\Request;

// 1. Load Autoload
require __DIR__ . '/../vendor/autoload.php';

// 2. Siapkan Folder Temporary Vercel (/tmp)
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

// 3. Set Storage Environment
putenv('APP_STORAGE_PATH=/tmp/storage');
$_ENV['APP_STORAGE_PATH'] = '/tmp/storage';

// 4. Inisialisasi Aplikasi
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Overwrite path storage ke /tmp secara resmi
$app->useStoragePath('/tmp/storage');

// 5. Jalankan via Illuminate\Contracts\Http\Kernel (Cara yang benar untuk Laravel 11+)
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'mock';
});

require __DIR__ . '/admin.php';

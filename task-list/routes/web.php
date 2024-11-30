<?php

use Illuminate\Support\Facades\Route;

Route::get('/foo', function () {
    return 'BAR!';
});

Route::get('/', function () {
    return view('welcome');
});

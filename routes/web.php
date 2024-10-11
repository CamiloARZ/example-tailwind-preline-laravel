<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


});

Route::get('/home', function () {
    return view('preline.home');
})->name('preline.home');

Route::get('/login', function () {
    return view('preline.login');
})->name('preline.login');

Route::get('/pricing', function () {
    return view('preline.pricing');
})->name('preline.pricing');

Route::get('/grids', function () {
    return view('preline.grids');
})->name('preline.grids');
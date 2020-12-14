<?php

use Illuminate\Support\Facades\Route;
Auth::routes();

Route::get('/login', [App\Http\Controllers\HomeController::class, 'index'])->name('login');





Route::get('/', function () {
return view('login');
});

Route::get('/home', function () {
    return view('home');
});



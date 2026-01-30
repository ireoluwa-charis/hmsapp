<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/welcome');
});

Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/register', function () {
    return view('auth/registration');
});

Route::get('/about', function () {
    return view('auth/about');
});

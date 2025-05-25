<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('shared/home');
});

Route::view('/login', 'Acounts/login');

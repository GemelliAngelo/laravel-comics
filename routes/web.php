<?php

use Illuminate\Support\Facades\Route;

Route::get('/comics', function () {
    return view('homepage');
})->name("home");
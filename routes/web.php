<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $username = "Gerundo";

    $data = [
        'username' => $username,
    ];
    return view('welcome', $data);
})->name("home");

Route::get('/products', function() {
    return view(('products'));
})->name("products");
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
    $products = [
        "zappa",
        "falcetto",
        "decespugliatore"
    ];

    $data = [
        'products' => $products,
    ];
    return view('products', $data);
})->name("products");
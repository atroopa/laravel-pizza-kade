<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizza', function () {

    $pizza = [
        "type" => "special",
        "crust" => "thin",
        "price" => 90
    ];

    return view('pizzas', $pizza);
});
 

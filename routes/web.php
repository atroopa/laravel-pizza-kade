<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizza', function () {
    return view('pizzas', ["type" => "special", "crust" => "thin"]);
});

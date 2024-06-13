<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/pizza', function () {

    $pizzas = [
        ["type" => "special"            ,"crust"=>"thin"  ,     "price" => 45],
        ["type" => "mix"                ,"crust"=>"thick" ,     "price" => 18],
        ["type" => "meat and mashroom"  ,"crust"=>"garlic",     "price" => 94]
    ];

    return view('pizzas', ["pizzas" => $pizzas]);
});
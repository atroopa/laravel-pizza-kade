<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    // My Controller Index --------------------
    public function index(){
        $pizzas = [
            ["type" => "special"            ,"crust"=>"thin"  ,     "price" => 45],
            ["type" => "mix"                ,"crust"=>"thick" ,     "price" => 18],
            ["type" => "meat and mashroom"  ,"crust"=>"garlic",     "price" => 94]
        ];
    
        return view('pizzas', [
            "pizzas" => $pizzas,
            "name"   => request('name'),
            "age"    => request('age')
        ]);
    }

    // My Controller Show --------------------
    public function show($id){
        return view('details', ['id' => $id]);
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    // My Controller Index --------------------
    public function index(){

        $pizzas = Pizza::all();
    
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

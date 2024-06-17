<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{


    // My Controller Index --------------------
    public function index(){

        //$pizzas = Pizza::all();
        //$pizzas = Pizza::orderBy('name', 'desc')->get();
        //$pizzas = Pizza::where('type', 'special')->get();
        $pizzas = Pizza::latest()->get();
    
        return view('pizzas.index', [
            "pizzas" => $pizzas,
            "name"   => request('name'),
            "age"    => request('age')
        ]);
    }

    // My Controller Show --------------------
    public function show($id){

        $pizza = Pizza::findOrFail($id);

        return view('pizzas.show', ['pizza' => $pizza]);
    }


    // My Controller create --------------------
    public function create(){
        return view('pizzas.create');
    }
}

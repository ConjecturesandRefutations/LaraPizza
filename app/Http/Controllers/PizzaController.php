<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index(){
        $pizzas = [
            ['type' => 'hawaiian', 'base' => 'cheesy crust'],
            ['type' => 'volcano', 'base' => 'garlic crust'],
            ['type' => 'veg supreme', 'base' => 'thin and crispy']
        ];
    
        return view('pizzas', [
            'pizzas' => $pizzas,
            'name' => request('name')
        ]);
    }

    public function show($id){
      //Use the $id variable to query the db for a record
      return view('details', ['id' => $id]);
    }
};

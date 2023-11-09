<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/pizzas', function () {
    $pizzas = [
        ['type' => 'hawaiian', 'base' => 'cheesy crust'],
        ['type' => 'volcano', 'base' => 'garlic crust'],
        ['type' => 'veg supreme', 'base' => 'thin and crispy']
    ];
    return view('pizzas', ['pizzas' => $pizzas]);
});



/* Route::get('/pizzas', function () {
    $pizza = ['type'=>'Hawaiian',
    'base' => 'garlic crust',
    'price' => 10];
    return view('pizzas', $pizza);
});
 */
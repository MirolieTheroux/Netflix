<?php

use Illuminate\Support\Facades\Route;
//Chaque fois qu'on ajouter un controller on doit l'ajouter ici
use App\Http\Controllers\PokemonsController;
use App\Http\Controllers\FilmsController;


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

//Très rare qu'on retourne une view
Route::get('/', function () {
    return view('welcome');
});


Route::get('pokemons',
[PokemonsController::class, 'index']);

Route::get('films',
[FilmsController::class, 'index']);
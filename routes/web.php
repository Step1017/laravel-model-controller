<?php

use Illuminate\Support\Facades\Route;
use App\Models\Movie;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //faccio un test per vedere se funziona il model e utilizzo il metodo statico per recuperare tutti i movies dal db
    $movies = Movie::all();
    //e per visualizzarli in pagina utilizzo:
    dd($movies);
    return view('welcome');
});



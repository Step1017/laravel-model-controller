<?php

use Illuminate\Support\Facades\Route;
/*tolgo l'importazione di Movie da qui:
    //use App\Models\Movie; */

//Controllers
//importo PageController qui in modo da poterlo richiamare:
use App\Http\Controllers\Guest\PageController;
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

// e richiamo qui la funzione creata in PageController:
Route::get('/', [PageController::class, 'index']);



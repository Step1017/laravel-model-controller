<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Models
//importo il model Movie per poterlo richiamare anche qui
use App\Models\Movie;

class PageController extends Controller
{
    //creo funzione con un nome qui per poi richiamarla in web.php
    public function index() {
        $movies = Movie::all();
        dd('Ok, funziona');
        return view('welcome');
    }
}

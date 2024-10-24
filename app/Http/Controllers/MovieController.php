<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    // recupero tutti i movies dal database
    public function index(){
        $movies = Movie::all();
        // ritorno la view movies passandogli i dati recuperati dal database
        return view('pages.movies.index', compact('movies'));
    }
}
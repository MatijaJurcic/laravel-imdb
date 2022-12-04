<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MoviesController extends Controller
{
    public function index() {
        $movies = Movie::all();

        return view('movies.movies', compact('movies'));
    }

    public function show($id) {
        $movies = Movie::all();
        return view('movies.movies', compact('movies'));
    }


}

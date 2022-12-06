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

    public function create() {
        return view('movies.create');
    }

    public function store() {
        $this->validate(
            request(),
            [
                'title' => 'required',
                'genre' => 'required',
                'director' => 'required',
                'year' => 'integer|min:1900|max:2022',
                'storyline' => 'max:1000'
            ]
        );

        Movie::create(
            [
                'title' => request('title'),
                'genre' => request('genre'),
                'director' => request('director'),
                'year' => request('year'),
                'storyline' => request('storyline')
            ]
            );
    }


}

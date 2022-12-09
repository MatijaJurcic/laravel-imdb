<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Comment;



class CommentsController extends Controller
{


    public function store(Request $request) {
        $validated = $request -> validated();

    Movie::find($validated['movie_id'])->addComment($validated['content']);

    return redirect('/movies/'.$validated['movie_id']);


     }
}

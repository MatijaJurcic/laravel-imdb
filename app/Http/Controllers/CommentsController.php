<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    protected $fillable = ['movie_id', 'content', 'created_at'];
}

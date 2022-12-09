@extends('layouts.master')

@section('title', $movie->title)

@section('content')

<h1>
    <h2>Title</h2>
    {{ $movie->title }}
    <hr>
    <h2>Genre</h2>
    {{ $movie->genre }}
    <hr>
    <h2>Year</h2>
    {{ $movie->year }}
    <hr>
    <h2>Director</h2>
    {{ $movie->director }}
    <hr>
    <h2>Storyline</h2>
    {{ $movie->storyline }}
</h1>

@endsection

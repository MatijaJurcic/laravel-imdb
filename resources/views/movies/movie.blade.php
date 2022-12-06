@extends('layouts.master')

@section('title', $movie->title)

@section('content')

<h1>
    {{ $movie->title }}
    <hr>
    {{ $movie->year }}
    <hr>
    {{ $movie->director }}
    <hr>
    {{ $movie->storyline }}
</h1>

@endsection

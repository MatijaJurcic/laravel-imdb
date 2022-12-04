@extends('layouts.master')
@section('title', 'Movies')

@section('content')

@foreach ($movies as $movie)
<p style="text-align:center">
   <h1> <a href="{{ route('single-movie', ['id'=>$movie->id]) }}"> {{ $movie->title}}</a></h1>
   <hr>
   <p>
    {{ $movie->storyline}}
   </p>
</p>
@endforeach

@endsection

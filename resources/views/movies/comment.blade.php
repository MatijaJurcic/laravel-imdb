@extends('layouts.master')

@section('title', '`Comment')

@section('content')

    <h3>Comments</h3>
    <hr>
    @foreach ($movie->comments as $comment)
      {{ $comment->content }}
      <hr>
      {{ $comment->created_at }}
    @endforeach

<form action="{{ route('movie-comments') }}" method="post">

@csrf

<div class="mb-3 row">
    <label for="movieTitle1" class="col-sm-2 col-form-label">Comment</label>
    <div class="col-sm-10">
      <textarea type="text" name="content" class="form-control" id="movieTitle" placeholder="Title"></textarea>

    @error('content')
        @include('partials.error')
    @enderror

    <label for="movieTitle" class="col-sm-2 col-form-label">Movie name</label>

    <select name="movie_id" id="movieTitle2" disabled="disabled">

    @foreach ($movies as $add)
        <option value="{{ $add->title }}"></option>
    @endforeach
    </select>
    @error('movie_id')
        @include('partials.error')
    @enderror
</div>

<button type="submit">Add comment</button>
@endsection

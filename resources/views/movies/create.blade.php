@extends('layouts.master')

@section('title', 'Create movie')

@section('content')

<form action="/movies" method="post"></form>

@csrf

<div class="mb-3 row">
    <label for="movieTitle" class="col-sm-2 col-form-label">Title:</label>
    <div class="col-sm-10">
      <input type="text" name="title" class="form-control" id="movieTitle" placeholder="Title">
    </div>
    <br>
    <br>
    @error('title')
        @include('partials.error')
    @enderror

    <div class="mb-3 row">
        <label for="movieGenre" class="col-sm-2 col-form-label">Genre:</label>
        <div class="col-sm-10">
          <input type="text" name="genre" class="form-control" id="movieGenre" placeholder="Genre">
        </div>
        <br>
        <br>
    @error('genre')
        @include('partials.error')
    @enderror

    <div class="mb-3 row">
        <label for="movieDirector" class="col-sm-2 col-form-label">Director:</label>
        <div class="col-sm-10">
          <input type="text" name="director" class="form-control" id="movieDirector" placeholder="Director">
        </div>
        <br>
        <br>
    @error('director')
        @include('partials.error')
    @enderror

    <div class="mb-3 row">
        <label for="movieYear" class="col-sm-2 col-form-label">Year:</label>
        <div class="col-sm-10">
          <input type="text" name="year" class="form-control" id="movieYear" placeholder="Year">
        </div>
        <br>
        <br>
    @error('year')
        @include('partials.error')
    @enderror

     <div class="mb-3 row">
        <label for="movieStoryline" class="col-sm-2 col-form-label">Story:</label>
        <div class="col-sm-10">
          <input type="text" name="storyline" class="form-control" id="movieStoryline" placeholder="   Storyline">
        </div>
        <br>
        <br>
    @error('storyline')
        @include('partials.error')
    @enderror
    <br>
    <br>
    <button type="submit">Add movie</button>

@endsection

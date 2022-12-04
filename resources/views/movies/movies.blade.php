@include('layouts.master')
@section('title', 'Movies')

@section('content')

@foreach ($movies as $movie)
    <a href="{{ route('single-movie', ['id'=>$movie->id]) }}">{{ $movie->title}}</a>
@endforeach

@endsection

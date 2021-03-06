@extends('master')

@section('content')

    <div class="container">
        @foreach($moviesInfo as $movie)
        <div class="movie">
            <img src="{{$movie->poster}}" alt="{{$movie->name}}" width="43" height="64" class="poster"/> 
            <div class="movieInfo">
                <a href="movies/show/{{$movie->id}}" class="movieName">{{ $movie->name }} ({{ $movie->year }})</a>
                <div class="rating">{{number_format($movie->rating, 1, '.', '')}}</div>
            </div>
            @if($movie->seen == 0)
            <button type="button" class="btn btn-default btn-lg seen"><span class="glyphicon glyphicon-star"></span></button>
            @else
            <button type="button" class="btn btn-success btn-lg seen"><span class="glyphicon glyphicon-star"></span></button>
            @endif

            @if($movie->seen == 0)
            <button type="button" class="btn btn-danger btn-lg watchlist"><span class="glyphicon glyphicon-plus-sign"></span>Watchlist</button>
            @else
            <button type="button" class="btn btn-default btn-lg watchlist"><span class="glyphicon glyphicon-plus-sign"></span>Watchlist</button>
            @endif

        </div>
        @endforeach
    </div>

@endsection
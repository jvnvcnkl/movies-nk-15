@extends('layouts.app')

@section('content')


<h2>Movies list</h2>
<div>
    <ul>@foreach($movies as $movie)
        <h4>
            <li> <a href="/movies/{{$movie->id}}">{{$movie->title}} </a></li>
        </h4>
        <p>{{$movie->storyline}}</p>

        @endforeach
    </ul>
</div>

@endsection
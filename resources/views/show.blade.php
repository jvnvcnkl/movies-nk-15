@extends('layouts.app')

@section('content')

<h1>{{$movie->title }}</h1>
<div><i>{{$movie->genre}},{{$movie->yearFilmed}}</i> <br>
    Directed by: {{$movie->director}}
    <hr>
    <span>
        {{$movie->storyline}}
    </span>

</div>

<a href="/movies">Go back</a>
@endsection
@extends('layouts.app')

@section('content')

<h1>Add a movie</h1>
<form action="/create" method="POST">
    @csrf
    <div class="form-group">
        <label for="title">Movie Title</label>
        <input type="text" id='title' name='title' class='form-control'>
    </div>
    <div class="form-group">
        <label for="genre"> Movie Genre</label>
        <input type="text" id='genre' name='genre' class="form-control">
    </div>
    <div class="form-group">
        <label for="director">Directed by</label>
        <input type="text" id='director' name='director' class="form-control">
    </div>
    <div class="form-group">
        <label for="yearFilmed"></label>
        <input type="number" id='yearFilmed' name='yearFilmed' min="1900" max="2099" step="1" value="2021" />
    </div>
    <div class="form-group">
        <label for="storyline"></label>
        <textarea name="storyline" id="storyline" cols="30" rows="10" class="form-control">Storyline</textarea>
    </div>
    <button type='submit' class="btn btn-primary">Submit</button>


</form>




@endsection
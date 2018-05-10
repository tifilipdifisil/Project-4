@extends('layouts.library')

@section('title')
    Movie
@endsection
@section('navigation')

    <a class="navbar-brand" href="/mainpage">HOME</a>


    <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>

@endsection()

@section('content')


    <h1 >Movies</h1>

    <a href="/movie/add" class="btn btn-primary">Add Movie Tag</a>
    <a href="#" class="btn btn-secondary">Movie Library</a>
@endsection


@section('tag')


    <div class="card-body">
        @foreach($movie as $movie)
            <a href='/movie/{{ $movie->id }}'>
                <img class="card-img-top" src='{{ $movie->cover_url }}' class='cover' alt='Cover image for{{ $movie->title }}' data-holder-rendered="true">
                <p class="card-text">{{$movie->title}} release in  {{$movie->released_year}}</p>
        @endforeach
    </div>



@endsection()


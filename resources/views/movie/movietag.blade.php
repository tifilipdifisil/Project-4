@extends('layouts.library')

@section('title')
    {{$movie->title}}
    @endsection()
@section('navigation')

    <a class="navbar-brand" href="/">HOME</a>
    <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>

@endsection()

@section('content')
    <h1>{{ $movie->title }}</h1>
    <img  class="card-img-top" src='{{ $movie->cover_url }}' class='cover' alt='Cover image for{{ $movie->title }}' data-holder-rendered="true">
    <p class="card-text">{{$movie->title}}</p>
    <p>Release Year  {{$movie->released_year}}</p>
    <p>Audience {{$movie->movierating_id}}</p>
    <p>My rating {{$movie->myrating}}</p>
    <div class="d-flex justify-content-between align-items-center">
        <div class="btn-group">
            <a type="button" class="btn btn-sm btn-outline-secondary" href='/movie/{{$movie->id}}/edit'>Edit</a>
            <a type="button" class="btn btn-sm btn-outline-secondary" href='/movie/{{$movie->id}}/delete'>Delete</a>
            <a type="button" class="btn btn-sm btn-outline-secondary">Upload Media</a>
        </div>
    </div>
@endsection
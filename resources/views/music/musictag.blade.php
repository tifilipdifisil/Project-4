@extends('layouts.library')

@section('title')
    {{$music->title}}
@endsection()
@section('navigation')

    <a class="navbar-brand" href="/">HOME</a>
    <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>

@endsection()

@section('content')
    <h1>{{ $music->title }}</h1>
    <img  class="card-img-top" src='{{ $music->cover_url }}' class='cover' alt='Cover image for{{ $music->title }}' data-holder-rendered="true">
    <p class="card-text">{{$music->title}}</p>
    <p>Release Year  {{$music->released_year}}</p>
    <p>{{$music->genre}}</p>
    <p>My rating {{$music->myrating}}</p>
    <div class="d-flex justify-content-between align-items-center">
        <div class="btn-group">
            <a type="button" class="btn btn-sm btn-outline-secondary" href='/music/{{$music->id}}/edit'>Edit</a>
            <a type="button" class="btn btn-sm btn-outline-secondary" href='/music/{{$music->id}}/delete'>Delete</a>
            <a type="button" class="btn btn-sm btn-outline-secondary" href='/music/{{$music->id}}/favorites'>Add To Favorites</a>
            <a type="button" class="btn btn-sm btn-outline-secondary">Upload Media</a>
        </div>
    </div>
@endsection
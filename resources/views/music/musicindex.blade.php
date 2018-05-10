@extends('layouts.library')

@section('title')
    Music
@endsection
@section('navigation')

    <a class="navbar-brand" href="/mainpage">HOME</a>
    <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" >
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

    </form>

@endsection()

@section('content')


    <h1 >Music Library</h1>

    <a href="/music/add" class="btn btn-primary">Add Music Tag</a>
    <a href="#" class="btn btn-secondary">Movie Library</a>
@endsection


@section('tag')


    <div class="card-body">
        @foreach($music as $music)
            <a href='/music/{{ $music->id }}'>
                <img class="card-img-top" src='{{ $music->cover_url }}' class='cover' alt='Cover image for{{ $music->title }}' data-holder-rendered="true">
                <p class="card-text">{{$music->title}} release in  {{$music->released_year}}</p>
        @endforeach
    </div>



@endsection()


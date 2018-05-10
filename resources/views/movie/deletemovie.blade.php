
@extends('layouts.master')

@section('title')
    Confirm deletion: {{ $movie->title }}
@endsection

@section('content')
    <h1>Confirm deletion</h1>

    <p>Are you sure you want to delete <strong>{{ $movie->title }}</strong>?</p>

    <img src='{{ $movie->cover_url }}' class='cover' alt='Cover image for {{ $movie->title }}'>

    <form method='POST' action='/movie/{{ $movie->id }}'>
        {{ method_field('delete') }}
        {{ csrf_field() }}
        <input type='submit' value='Delete' class='btn btn-danger btn-small'>
    </form>

    <p class='cancel'>
        <a href='/movie/{{ $movie->id }}'>Cancel</a>
    </p>

@endsection
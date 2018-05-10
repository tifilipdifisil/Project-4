
@extends('layouts.master')

@section('title')
    Confirm deletion: {{ $music->title }}
@endsection

@section('content')
    <h1>Confirm deletion</h1>

    <p>Are you sure you want to delete <strong>{{ $music->title }}</strong>?</p>

    <img src='{{ $music->cover_url }}' class='cover' alt='Cover image for {{ $music->title }}'>

    <form method='POST' action='/music/{{ $music->id }}'>
        {{ method_field('delete') }}
        {{ csrf_field() }}
        <input type='submit' value='Delete' class='btn btn-danger btn-small'>
    </form>

    <p class='cancel'>
        <a href='/music/{{ $music->id }}'>Cancel</a>
    </p>

@endsection
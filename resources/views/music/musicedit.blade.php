
@extends('layouts.master')

@section('title')
    Edit {{$music->title}}Movie Tag
@endsection



@section('content')


    <div class="inner-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                    <h2 class="text-center">Edit {{$music->title}} Music tag</h2>
                    <div class="form-group">
                        <label for='title'>Music Title</label>
                        <input type='text' class="form-control" name='title' id='title'
                               placeholder="Enter Music Title" value='{{old('title'$music->title)}}'>
                        @include('modules.error-field', ['field' => 'title'])
                    </div>

                    <div class="form-group">
                        <label for='genre'>Artist</label>
                        <input type='text' class="form-control" name='artist' id='artist' placeholder="Add Artist Name"
                               value='{{old('artist')}}'>
                        @include('modules.error-field', ['field' => 'artist'])
                    </div>

                    <div class="form-group">
                        <label for='genre'>Genre</label>
                        <input type='text' class="form-control" name='genre' id='genre' placeholder="Choose Genre"
                               value='{{old('genre')}}'>
                        @include('modules.error-field', ['field' => 'genre'])
                    </div>

                    <div class="form-group">
                        <label for='released_year'>Release Year</label>
                        <input type='text' class="form-control" maxlength='4' name='released_year'
                               id='released_year' placeholder="Enter Album Release Year"
                               value='{{old('released_year')}}'>
                        @include('modules.error-field', ['field' => 'released_year'])
                    </div>

                    <div class="form-group">
                        <label for='album'>Album</label>
                        <input type='text' class="form-control" name='album' id='album'
                               placeholder="Add Album name" value='{{old('album')}}'>
                        @include('modules.error-field', ['field' => 'album'])
                    </div>

                    <div class="form-group">
                        <label for='cover_url'>Cover URL</label>
                        <input type='text' class="form-control" name='cover_url' id='cover_url'
                               placeholder="Cover URL " value='{{old('cover_url')}}'>
                        @include('modules.error-field', ['field' => 'cover_url'])
                    </div>
                    <div class="form-group">
                        <label for='rating'>My Rating</label>
                        <input type='text' class="form-control" maxlength='1' name='myrating' id='myrating'
                               placeholder="Your Rating " value='{{old('myrating')}}'>
                        @include('modules.error-field', ['field' => 'myrating'])
                    </div>

                    <button type="submit" class="btn btn-default" value='Add movie'>Submit</button>
                    </form>

                </div>
            </div>
        </div>

@endsection
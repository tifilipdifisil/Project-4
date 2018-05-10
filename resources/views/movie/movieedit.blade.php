
@extends('layouts.master')

@section('title')
    Edit {{$movie->title}}Movie Tag
@endsection



@section('content')


    <div class="inner-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                    <h2 class="text-center">Edit {{$movie->title}} Movie tag</h2>

                    <form role="form" method='POST' action='/movie/{{$movie->id}}'>
                        {{method_field('put')}}
                        {{csrf_field()}}



                        <div class="form-group">
                            <label for='title'>Movie Title</label>
                            <input type='text' class="form-control"  name='title' id='title'  placeholder="Enter Movie Title"value='{{old('title',$movie->title)}}'>
                        </div>


                        <div class="form-group">
                            <label for='genre'>Genre</label>
                            <input type='text' class="form-control"  name='genre' id='genre'  placeholder="Choose Genre"value='{{old('genre',$movie->genre)}}'>
                        </div>

                        <div class="form-group">
                            <label for='released_year'>Release Year</label>
                            <input type='text' class="form-control" maxlength='4' name='released_year' id='released_year'  placeholder="Enter Movie Release Year"value='{{old('released_year',$movie->released_year)}}'>
                        </div>


                        <div class="form-group">
                            <label for='cover_url'>Movie Rating</label>
                            <select name='movierating_id'>
                                <option value=''>Change The Movie Rating</option>
                                <option value='1'>G</option>
                                <option  value='2'>PG</option>
                                <option  value='3'>PG-13</option>
                                <option  value='4'>R</option>
                                <option  value='5'>NC-17</option>
                            </select>

                        </div>

                        <div class="form-group">
                            <label for='rating'>My Rating</label>
                            <input type='text' class="form-control" maxlength='1' name='myrating' id='myrating'  placeholder="My Rating " value='{{old('myrating',$movie->myrating)}}'>
                        </div>

                        <div class="form-group">
                            <label for='cover_url'>Cover URL</label>
                            <input type='text' class="form-control" name='cover_url' id='cover_url'  placeholder="Cover URL " value='{{old('cover_url',$movie->cover_url)}}'>
                        </div>

                        <button type="submit" class="btn btn-default" value='Save Changes'>Submit</button>
                    </form>
                </div>
            </div>
        </div>

@endsection
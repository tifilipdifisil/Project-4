    @extends('layouts.master')

    @section('title')
        {{'title'}}
    @endsection



    @section('content')


        <div class="inner-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-4">
                        <h2 class="text-center">Add New Movie tag</h2>

                        <form role="form" method='POST' action='/movies'>
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for='title'>Movie Title</label>
                                <input type='text' class="form-control" name='title' id='title'
                                       placeholder="Enter Movie Title" value='{{old('title')}}'>
                                @include('modules.error-field', ['field' => 'title'])
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
                                       id='released_year' placeholder="Enter Movie Release Year"
                                       value='{{old('released_year')}}'>
                                @include('modules.error-field', ['field' => 'released_year'])
                            </div>

                            <div class="form-group">
                                <label for='rating'>My Rating</label>
                                <input type='text' class="form-control" maxlength='1' name='myrating' id='myrating'
                                       placeholder="My Rating " value='{{old('myrating')}}'>
                                @include('modules.error-field', ['field' => 'myrating'])
                            </div>

                            <div class="form-group">
                                <label for='cover_url'>Movie Rating</label>
                                <select name='movierating_id'>
                                    <option value=''>Select The Movie Rating</option>
                                    <option value='1'>G</option>
                                    <option value='2'>PG</option>
                                    <option value='3'>PG-13</option>
                                    <option value='4'>R</option>
                                    <option value='5'>NC-17</option>
                                </select>

                            </div>

                            <div class="form-group">
                                <label for='cover_url'>Cover URL</label>
                                <input type='text' class="form-control" name='cover_url' id='cover_url'
                                       placeholder="Cover URL " value='{{old('cover_url')}}'>
                                @include('modules.error-field', ['field' => 'cover_url'])
                            </div>

                            <button type="submit" class="btn btn-default" value='Add movie'>Submit</button>
                        </form>
                    </div>
                </div>
            </div>

    @endsection
@extends('layouts.master')

@section('title')
   mainpage
@endsection

@section('content')

    <div class="jumbotron">
        <div class='container'>
            <h1>Hello, world!</h1>
            <p>Bienvenue, La Byenveni, Welcome</p>
        </div>
    </div>

    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-4">
                <p> <a class="btn btn-default" href="/musics" role="button">Music</a></p>
                <p>It gives soul to the universe,
                    wings to the mind,flight to the
                    imagination,and charm and gaiety
                    to life and to everything.One good thing about music,
                    when it hits you, you feel no pain</p>

            </div>
            <div class="col-md-4">
                <p><a class="btn btn-default" href="/movies" role="button">Movie</a></p>
                <p>The cinema substitutes for our gaze a world more in harmony with our desires.
                    It's the ultimate pervert art. It doesn't give
                    you what you desire - it tells you how to desire.</p>

            </div>

        </div>

            <form method='POST' id='logout' action='/logout'>
                {{ csrf_field() }}
                <button  class="btn btn-primary" onClick='document.getElementById("logout").submit();'>Logout </button>
            </form>


    </div>

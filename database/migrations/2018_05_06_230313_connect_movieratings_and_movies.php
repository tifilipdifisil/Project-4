<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectMovieratingsAndMovies extends Migration
{

    public function up()
    {
        Schema::table('movies', function (Blueprint $table) {

            $table->integer('movierating_id')->unsigned();


            $table->foreign('movierating_id')->references('id')->on('movieratings');

        });
    }

    public function down()
    {
        Schema::table('movies', function (Blueprint $table) {

            $table->dropForeign('movies_movierating_id_foreign');

            $table->dropColumn('movierating_id');
        });
    }
}
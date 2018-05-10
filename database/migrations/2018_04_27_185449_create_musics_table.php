<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMusicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musics', function (Blueprint $table) {

            $table->increments('id');


            $table->timestamps();

            # table fields...
            $table->string('title');
            $table->string('artist');
            $table->string('genre');
            $table->year('released_year');
            $table->string('album')->nullable();
            $table->string('cover_url')->nullable();
            $table->smallInteger('myrating')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('musics');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailFilmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_detail', function (Blueprint $table) {
            $table->increments('idd');
            $table->integer('rate')->unsigned()->default(0);
            $table->integer('follow')->unsigned();
            $table->integer('status')->unsigned();
            // Tao khoa ngoai
            $table->integer('movie_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->foreign('movie_id')->references('movie_id')->on('movie')->onDelete('cascade');
            $table->foreign('user_id')->references('user_id')->on('user')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie_detail');
    }
}

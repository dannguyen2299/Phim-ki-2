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
        Schema::create('detail_film', function (Blueprint $table) {
            $table->increments('idd');
            $table->integer('rate')->unsigned();
            $table->integer('follow')->unsigned();
            $table->integer('status')->unsigned();
            // Tao khoa ngoai
            $table->integer('id_film')->unsigned();
            $table->integer('id_user')->unsigned();
            $table->foreign('id_film')->references('id_film')->on('film')->onDelete('cascade');
            $table->foreign('id_user')->references('id_user')->on('user')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_film');
    }
}

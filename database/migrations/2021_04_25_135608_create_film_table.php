<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('film', function (Blueprint $table) {
            $table->increments('id_film');
            $table->string('name_film',255)->nullable(false);
            $table->year('year');
            $table->integer('number_view')->unsigned();
            $table->text('introduce_film')->nullable(false);
            $table->time('time');
            $table->string('url_trailer',255)->nullable(false);
            $table->string('url_image',255)->nullable();
            $table->string('url_image_2',255)->nullable();
            $table->string('url_cmt_fb',255)->nullable();
            $table->integer('status')->unsigned()->nullable(false);
            // Tao lien ket
            $table->integer('id_nation')->unsigned();
            $table->foreign('id_nation')->references('id_nation')->on('nation')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('film');
    }
}

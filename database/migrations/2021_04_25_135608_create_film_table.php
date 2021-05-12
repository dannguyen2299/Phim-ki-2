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
        Schema::create('movie', function (Blueprint $table) {
            $table->increments('movie_id');
            $table->string('movie_name',255)->nullable(false);
            $table->year('year');
            $table->integer('view')->unsigned();
            $table->text('introduce')->nullable(false);
            $table->string('length');
            $table->string('url_trailer',255)->nullable(false);
            $table->string('url_image',255)->nullable(false);
            $table->string('url_cmt_fb',255)->nullable();
            $table->integer('status')->unsigned()->nullable(false);
            // Tao lien ket
            $table->integer('nation_id')->unsigned();
            $table->foreign('nation_id')->references('nation_id')->on('nation')->onDelete('cascade');
            

        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie');
    }
}

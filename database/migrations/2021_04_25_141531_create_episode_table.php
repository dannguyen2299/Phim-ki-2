<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpisodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('episode', function (Blueprint $table) {
            $table->increments('id_episode');
            $table->string('name_episode',30)->nullable(false);
            $table->string('url_first',255)->nullable(false);
            $table->string('url_second',255)->nullable(false);
            $table->integer('status')->unsigned();
            // Tao khoa ngoai
            $table->integer('id_film')->unsigned();
            $table->foreign('id_film')->references('id_film')->on('film')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('episode');
    }
}

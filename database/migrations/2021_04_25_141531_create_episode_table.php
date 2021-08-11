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
            $table->increments('episode_id');
            $table->string('episode_name',255)->nullable(false);
            $table->string('url_first',255)->nullable(false);
            $table->string('url_second',255)->nullable();
            $table->integer('view')->unsigned()->nullable()->default(0);
            $table->integer('week_view')->unsigned()->nullable()->default(0);
            $table->integer('month_view')->unsigned()->nullable()->default(0);
            $table->integer('year_view')->unsigned()->nullable()->default(0);
            $table->integer('status')->unsigned()->default(1);
            // Tao khoa ngoai
            $table->integer('movie_id')->unsigned();
            $table->foreign('movie_id')->references('movie_id')->on('movie')->onDelete('cascade');
            
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

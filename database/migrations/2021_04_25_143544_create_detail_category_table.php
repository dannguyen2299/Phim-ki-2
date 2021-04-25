<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_category', function (Blueprint $table) {
            $table->increments('idd');
            $table->integer('status')->unsigned();
            // Tao khoa ngoai
            $table->integer('id_film')->unsigned();
            $table->integer('id_category')->unsigned();
            $table->foreign('id_film')->references('id_film')->on('film')->onDelete('cascade');
            $table->foreign('id_category')->references('id_category')->on('category')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_category');
    }
}

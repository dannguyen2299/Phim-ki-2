<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message', function (Blueprint $table) {
            $table->increments('id_message');
            $table->string('name',255)->nullable(false);
            $table->string('email',255)->nullable(false);
            $table->text('message',255);
            // Tao khoa ngoai
            $table->integer('id_episode')->unsigned();
            $table->foreign('id_episode')->references('id_episode')->on('episode')->onDelete('cascade');         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('message');
    }
}

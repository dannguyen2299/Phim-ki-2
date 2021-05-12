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
            $table->increments('message_id');
            $table->string('user_name',255)->nullable(false);
            $table->string('user_email',255)->nullable(false);
            $table->text('content',255);
            // Tao khoa ngoai
            $table->integer('episode_id')->unsigned();
            $table->foreign('episode_id')->references('episode_id')->on('episode')->onDelete('cascade');         
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

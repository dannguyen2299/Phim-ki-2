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
        Schema::create('report', function (Blueprint $table) {
            $table->increments('report_id');
            $table->text('content',255);
            $table->date('created_at')->nullable();
            // Tao khoa ngoai
            $table->integer('episode_id')->unsigned();
            $table->foreign('episode_id')->references('episode_id')->on('episode')->onDelete('cascade');       
            
            $table->integer('is_fixed')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('report');
    }
}

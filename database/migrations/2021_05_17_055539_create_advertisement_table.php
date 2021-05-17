<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertisementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisement', function (Blueprint $table) {
            $table->increments('ad_id');
            $table->string('ad_name',115)->nullable();
            $table->string('url_banner',255)->nullable(false);
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->integer('price')->unsigned()->nullable();
            $table->integer('have_paid')->unsigned();
            $table->integer('ad_location')->unsigned()->default('0'); //0: chưa gắn; 1,2,...: đã gắn - vị trí 1,2,...

            // Tao khoa ngoai
            $table->integer('partner_id')->unsigned();
            $table->foreign('partner_id')->references('partner_id')->on('partner')->onDelete('cascade');
            // Het khoa ngoai

            $table->integer('status')->unsigned();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advertisement');
    }
}

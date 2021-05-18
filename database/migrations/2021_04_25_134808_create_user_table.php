<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('email',255)->nullable(false)->unique();
            $table->string('username',255)->nullable(false)->unique();
            $table->string('password',255)->nullable(false);
            $table->string('name',255)->nullable(false);
            $table->date('created_at')->nullable();
            // Tao khoa ngoai
            $table->integer('role_id')->unsigned();
            $table->foreign('role_id')->references('role_id')->on('role')->onDelete('cascade');
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
        Schema::dropIfExists('user');
    }
}

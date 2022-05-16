<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('speciallists', function (Blueprint $table) {
            $table->id();
            $table->string('phone');
            $table->string('job_name');
            $table->string('bio');
            $table->string('workplace');
            $table->string('id_photo');
            $table->string('national_id');
            $table->string('national_id_photo');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('speciallists');
    }
};

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
        Schema::create('kids_areas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->time('open_time')->nullable();
            $table->time('close_time')->nullable();
            $table->integer('child_min_age')->nullable();
            $table->integer('child_max_age')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('owner_name');
            $table->string('owner_phone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kids_areas');
    }
};

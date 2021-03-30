<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDefaultStruct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('slug', 255);
        });

        Schema::create('cities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rid')->unsigned();
            $table->string('name', 255);
            $table->string('slug', 255);

            $table->foreign('rid')->references('id')->on('regions')->onDelete('cascade');
        });

        Schema::create('districts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cid')->unsigned();
            $table->string('name', 255);
            $table->string('slug', 255);

            $table->foreign('cid')->references('id')->on('cities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regions');
        Schema::dropIfExists('cities');
        Schema::dropIfExists('districts');
    }
}

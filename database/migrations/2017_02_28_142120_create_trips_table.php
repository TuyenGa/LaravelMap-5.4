<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned('id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('street');
            $table->string('state');
            $table->string('city');
            $table->string('zip');
            $table->string('price');
            $table->double('lat');
            $table->double('lng');
            $table->text('description');
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
        Schema::dropIfExists('trips');
    }
}

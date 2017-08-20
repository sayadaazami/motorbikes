<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotorBikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motor_bikes', function (Blueprint $table) {
            //Store at least make and model, cc, color, weight, price and one image
            $table->increments('id');
            $table->smallInteger('cc');
            $table->string('color');
            $table->smallInteger('weight');
            $table->integer('price');
            $table->string('image');
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
        Schema::dropIfExists('motor_bikes');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->integer('category_id');
            $table->integer('sub_category_id');
            $table->integer('division_id');
            $table->integer('city_id');
            $table->string('image');
            $table->string('brand');
            $table->string('model');
            $table->string('trim');
            $table->string('model_year');
            $table->string('registration_year');
            $table->string('condition');
            $table->string('transmission');
            $table->string('body_type');
            $table->string('fuel_type');
            $table->string('cc');
            $table->string('km');
            $table->string('price');
            $table->string('na');
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
        Schema::dropIfExists('vehicles');
    }
}

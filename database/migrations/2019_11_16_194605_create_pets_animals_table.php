<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetsAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets_animals', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->integer('user_id');
            $table->integer('category_id');
            $table->integer('sub_category_id');
            $table->integer('division_id');
            $table->integer('city_id');
            $table->string('image');
            $table->string('condition');
            $table->string('item_type');
            $table->string('title');
            $table->string('description');
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
        Schema::dropIfExists('pets_animals');
    }
}

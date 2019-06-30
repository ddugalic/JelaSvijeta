<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredients', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });

        Schema::create('ingredient_meal', function (Blueprint $table) {
            $table->integer('ingredient_id');
            $table->integer('meal_id');

            $table->primary(['ingredient_id', 'meal_id']);
            $table->foreign('ingredient_id')
            ->references('id')->on('ingredients')
            ->onDelete('cascade');
            $table->foreign('meal_id')
            ->references('id')->on('meals')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingredients');
        Schema::dropIfExists('ingredient_meal');
    }
}

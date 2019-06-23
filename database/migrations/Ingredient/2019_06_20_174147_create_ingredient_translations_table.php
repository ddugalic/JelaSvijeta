<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngredientTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredient_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('ingredient_id');
            $table->string('lang', 10)->index();
            $table->string('title');
            $table->string('slug', 100)->unique();

            $table->unique(['ingredient_id', 'lang']);
            $table->foreign('ingredient_id')
            ->references('id')->on('ingredients')
            ->onDelete('cascade');
            $table->foreign('lang')
            ->references('lang')->on('languages')
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
        Schema::dropIfExists('ingredient_translations');
    }
}

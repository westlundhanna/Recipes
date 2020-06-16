<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('ownerId');
            $table->string('recipesNamn');
            $table->text('recipesIngred');
            $table->text('recipesBeskrivn');
            $table->string('image')->nullable();
            $table->unsignedInteger('categoryId');
            $table->string('image')->nullable();
            $table->timestamps();

            $table->foreign('ownerId')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('categoryId')->references('id')->on('category')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes');
    }
}

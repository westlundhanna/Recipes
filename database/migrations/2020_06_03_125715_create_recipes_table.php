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
<<<<<<< HEAD
            $table->bigIncrements('recipesId');
            $table->unsignedBigInteger('ownerId');
            $table->string('recipesNamn');
            $table->text('recipesIngred');
            $table->text('recipesBeskrivn');
            $table->unsignedBigInteger('recipesKategori');
            $table->timestamps();

            $table->foreign('ownerId')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('recipesKategori')->references('categoryId')->on('category')->onDelete('cascade');
=======
            $table->increments('id');
            $table->unsignedInteger('ownerId');
            $table->string('recipesNamn');
            $table->text('recipesIngred');
            $table->text('recipesBeskrivn');
            $table->unsignedInteger('categoryId');
            $table->timestamps();

            $table->foreign('ownerId')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('categoryId')->references('id')->on('category')->onDelete('cascade');
>>>>>>> c2d6277f6d934b689efb7b4b47af1725eafbf7b9
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

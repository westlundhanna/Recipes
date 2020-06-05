<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipeCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe_category', function (Blueprint $table) {
            $table->bigIncrements('recipeCategoryId');
            $table->unsignedInteger('recipeCategoryRid');
            $table->unsignedInteger('recipeCategoryCid');
            $table->timestamps();

            $table->foreign('recipeCategoryCid')->references('categoryId')->on('category')->onDelete('cascade');
            $table->foreign('recipeCategoryRid')->references('recipesId')->on('recipes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipe_category');
    }
}

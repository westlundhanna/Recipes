<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
<<<<<<< HEAD:database/migrations/2020_06_02_084817_create_category_table.php
            $table->bigIncrements('categoryId');
=======
            $table->increments('id');
>>>>>>> c2d6277f6d934b689efb7b4b47af1725eafbf7b9:database/migrations/2020_06_04_084817_create_category_table.php
            $table->string('categoryNamn');
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
        Schema::dropIfExists('category');
    }
}

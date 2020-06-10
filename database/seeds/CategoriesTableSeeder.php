<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            'categoryNamn' => 'Fisk',
        ]);
        DB::table('category')->insert([
            'categoryNamn' => 'Kött',
        ]);
        DB::table('category')->insert([
            'categoryNamn' => 'Fågel',
        ]);
        DB::table('category')->insert([
            'categoryNamn' => 'Vegetarisk',
        ]);
    }
}

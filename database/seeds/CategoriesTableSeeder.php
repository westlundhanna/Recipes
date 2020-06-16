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
            'name' => 'Fisk',
        ]);
        DB::table('category')->insert([
            'name' => 'Kött',
        ]);
        DB::table('category')->insert([
            'name' => 'Fågel',
        ]);
        DB::table('category')->insert([
            'name' => 'Vegetarisk',
        ]);
    }
}

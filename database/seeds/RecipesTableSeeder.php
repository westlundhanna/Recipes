<?php

use Illuminate\Database\Seeder;

class RecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipes')->insert([
            'ownerId' => 2,
            'recipesNamn' => 'Fiskgryta',
            'recipesIngred' => '300g laxfilé, 200g torskfilé, 1 buljongtärning, 1l vatten',
            'recipesBeskrivn' => 'Hacka lax och torsk i bitar, koka upp vatten med buljong osv.',
            'recipesKategori' => 'Fisk',
        ]);
        DB::table('recipes')->insert([
            'ownerId' => 1,
            'recipesNamn' => 'Köttgryta',
            'recipesIngred' => '500g köttfärs, 1 buljongtärning, 1l vatten, 300g svamp, 3,5dl créme fraiche',
            'recipesBeskrivn' => 'Stek köttfärs, koka upp vatten med buljong, hacka svamp och stek, osv.',
            'recipesKategori' => 'Kött',
        ]);
    }
}

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
            'ownerId' => 1,
            'recipesNamn' => 'Fiskgryta',
            'recipesIngred' => '300g laxfilé, 200g torskfilé, 1 buljongtärning, 1l vatten',
            'recipesBeskrivn' => 'Hacka lax och torsk i bitar, koka upp vatten med buljong osv.',
            'categoryId' => 1,
            
        ]);
        DB::table('recipes')->insert([
            'ownerId' => 1,
            'recipesNamn' => 'Köttgryta',
            'recipesIngred' => '500g köttfärs, 1 buljongtärning, 1l vatten, 300g svamp, 3,5dl créme fraiche',
            'recipesBeskrivn' => 'Stek köttfärs, koka upp vatten med buljong, hacka svamp och stek, osv.',
            'categoryId' => 1,
            
        ]);
        DB::table('recipes')->insert([
            'ownerId' => 1,
            'recipesNamn' => 'Grekisk sallad',
            'recipesIngred' => '3 tomater, 1 gurka, 1 salladshuvud, 1 pkt fetaost, 1 burk oliver, 0,5dl olivolja',
            'recipesBeskrivn' => 'Hacka alla grönsaker och fetaosten i tärningar, ringla över olivolja',
            'categoryId' => 1,
        ]);
    }
}

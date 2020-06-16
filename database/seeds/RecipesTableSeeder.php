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
            'name' => 'Fiskgryta',
            'ingredients' => '300g laxfilé, 200g torskfilé, 1 buljongtärning, 1l vatten',
            'description' => 'Hacka lax och torsk i bitar, koka upp vatten med buljong osv.',
            'categoryId' => 1,
            
        ]);
        DB::table('recipes')->insert([
            'ownerId' => 1,
            'name' => 'Köttgryta',
            'ingredients' => '500g köttfärs, 1 buljongtärning, 1l vatten, 300g svamp, 3,5dl créme fraiche',
            'description' => 'Stek köttfärs, koka upp vatten med buljong, hacka svamp och stek, osv.',
            'categoryId' => 1,
            
        ]);
        DB::table('recipes')->insert([
            'ownerId' => 1,
            'name' => 'Grekisk sallad',
            'ingredients' => '3 tomater, 1 gurka, 1 salladshuvud, 1 pkt fetaost, 1 burk oliver, 0,5dl olivolja',
            'description' => 'Hacka alla grönsaker och fetaosten i tärningar, ringla över olivolja',
            'categoryId' => 1,
        ]);
    }
}

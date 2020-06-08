<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Skapar 5 random users efter modellen i UserFactory.php
        $users = factory(App\User::class, 5)->create();
    }
}

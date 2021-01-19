<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Seeder has been called
         $this->call(UserTableSeeder::class);
         $this->call(RolesTableSeeder::class);
    }
}

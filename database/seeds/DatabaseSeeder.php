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
        $this->call(UsersTableSeeder::class);
        $this->call(ChampionsTableSeeder::class);
        $this->call(ItemsTableSeeder::class);
        $this->call(TeamsTableSeeder::class);
    }
}

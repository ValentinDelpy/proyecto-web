<?php

use Illuminate\Database\Seeder;

class ChampionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Champions::class, 50)->create();
    }
}

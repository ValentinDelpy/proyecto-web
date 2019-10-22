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
        \DB::table('champions')->insert([
            'name' => 'Graves',
            'health_points' => '600',
            'type' => 'Bruiser',
            'role' => 'Jungler'
        ]);
        App\Champions::create([
            'name' => 'Leblanc',
            'health_points' => '5500',
            'type' => 'Mage',
            'role' => 'Midlaner'
        ]);
    }
}

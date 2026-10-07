<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materials')->insert([
            [
                'name' => 'StarterKit',
            ],
            [
                'name' => 'Educational Robotics Kit',
            ],
            [
                'name' => 'Kit5',
            ],
        ]);
    }
}
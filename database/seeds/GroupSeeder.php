<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupSeeder extends Seeder
{
    public function run()
    {
        DB::table('groups')->insert([
            ['level' => 'Beginner'],
            ['level' => 'Intermediate'],
            ['level' => 'Advanced'],
        ]);
    }
}
<?php

use Illuminate\Database\Seeder;
use App\Course;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(GroupSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(MaterialSeeder::class);

        factory(Course::class, 100)->create();
    }
}
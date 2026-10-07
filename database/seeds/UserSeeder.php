<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'username' => 'Admon',
                'email' => 'admon@robotics.com',
                'password' => Hash::make('Adm@2022'),
                'role' => 'Administrative',
                'group_id' => 1,
            ],
            [
                'username' => 'Tecmilenio',
                'email' => 'tecmilenio@robotics.com',
                'password' => Hash::make('Adm@2022'),
                'role' => 'Teacher',
                'group_id' => 1,
            ],
            [
                'username' => 'Student',
                'email' => 'student@robotics.com',
                'password' => Hash::make('Adm@2022'),
                'role' => 'Student',
                'group_id' => 1,
            ],
        ]);
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => \Faker\Factory::create()->name(),
            'email' => \Faker\Factory::create()->unique()->safeEmail(),
            'password' => bcrypt('wasdwasd'),
            'role_id' => '2',
            'remember_token' => Str::random(10),
        ]);

        DB::table('users')->insert([
            'name' => \Faker\Factory::create()->name(),
            'email' => \Faker\Factory::create()->unique()->safeEmail(),
            'password' => bcrypt('wasdwasd'),
            'role_id' => '1',
            'remember_token' => Str::random(10),
        ]);

      


    }
}

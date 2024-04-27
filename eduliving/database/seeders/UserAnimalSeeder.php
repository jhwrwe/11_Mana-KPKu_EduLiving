<?php

namespace Database\Seeders;
use App\Models\User_Animal;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserAnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        DB::table('user_animals')->insert([
            'user_id' => 1,
            'animal_id' => 3,
        ]);

        DB::table('user_animals')->insert([
            'user_id' => 1,
            'animal_id' => 2,
            
        ]);

        DB::table('user_animals')->insert([
            'user_id' => 2,
            'animal_id' => 3,
        ]);
    }
}

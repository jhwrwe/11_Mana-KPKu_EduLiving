<?php

namespace Database\Seeders;

use App\Models\User_Animal;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserAnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User_Animal::create([
            'user_id' => '1',
            'animal_id'=> '1'
        ]);
    }
}

<?php

namespace Database\Seeders;
use App\Models\Species;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpeciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('species')->insert([
            ['species_name' => 'Mamalia'],
            ['species_name' => 'Aves'],
            ['species_name' => 'Pisces'],
            ['species_name' => 'Reptilia'],
        ]);
    }
}

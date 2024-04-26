<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class OurTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('our_teams')->insert([
            'name' => 'David Smith',
            'title' => 'CEO',
            'date' => '1983-04-10',
            'major' => 'Business Administration',
            'description' => 'Efficient leader skilled in managing complex projects.',
            'image' => 'our_team_1.jpg'
        ]);
        DB::table('our_teams')->insert([
            'name' => 'Sophia Rodri',
            'title' => 'UX/UI Designer',
            'date' => '1988-07-30',
            'major' => 'Design and Visual Arts',
            'description' => 'Creative designer passionate about crafting user-centric experiences.',
            'image' => 'our_team_2.jpeg'
        ]);
        DB::table('our_teams')->insert([
            'name' => 'Michael Chen',
            'title' => 'COO',
            'date' => '1990-12-15',
            'major' => 'Finance and Economics',
            'description' => 'Analytical thinker with a strong understanding of market trends.',
            'image' => 'our_team_3.jpeg'
        ]);
        DB::table('our_teams')->insert([
            'name' => 'Emily Johnson',
            'title' => 'Senior Marketing Manager',
            'date' => '1985-05-20',
            'major' => 'Marketing and Communications',
            'description' => 'Strategist with a keen eye for consumer trends and engagement.',
            'image' => 'our_team_4.jpeg'
        ]);
    }
}

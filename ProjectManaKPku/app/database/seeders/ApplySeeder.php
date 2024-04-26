<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ApplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('applies')->insert([
            'id_school_apply' => 1,
            'id_teacher_apply' => 4,
            'status' => "Pending",
            ]);
        DB::table('applies')->insert([
                'id_school_apply' => 11,
                'id_teacher_apply' => 10,
                'status' => "Approved",
                ]);
        DB::table('applies')->insert([
                    'id_school_apply' => 3,
                    'id_teacher_apply' => 7,
                    'status' => "Denied",
        ]);
        DB::table('applies')->insert([
            'id_school_apply' => 4,
            'id_teacher_apply' => 8,
            'status' => "Pending",
            ]);
        DB::table('applies')->insert([
                'id_school_apply' => 5,
                'id_teacher_apply' => 9,
                'status' => "Approved",
                ]);
    }
}

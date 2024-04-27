<?php

namespace Database\Seeders;
use App\Models\Quiz;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $quizzes = [
            [
                'question' => 'What is the largest cat species?',
                'answers' => 'Tiger',
                'false_answer_1' => 'Lion',
                'false_answer_2' => 'Leopard',
                'false_answer_3' => 'Cheetah',
                'species_id' => 1, // ID spesies Mamalia
            ],
            [
                'question' => 'Which bird is known for its ability to mimic human speech?',
                'answers' => 'Parrot',
                'false_answer_1' => 'Eagle',
                'false_answer_2' => 'Owl',
                'false_answer_3' => 'Hawk',
                'species_id' => 2, // ID spesies Aves
            ],
            // Tambahkan data quiz lainnya sesuai kebutuhan
        ];

        // Loop untuk menambahkan data quiz
        foreach ($quizzes as $quiz) {
            Quiz::create($quiz);
        }
    }
}

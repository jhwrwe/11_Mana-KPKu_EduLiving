<?php

namespace Database\Seeders;
use App\Models\Quiz;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
            [
                'question' => 'What is the name of the male giraffe?',
                'answers' => 'Mario',
                'false_answer_1' => 'Luigi',
                'false_answer_2' => 'Carsss',
                'false_answer_3' => 'Scar',
                'species_id' => 1, // ID spesies Aves
            ],
            [
                'question' => 'What is the name of the female giraffe?',
                'answers' => 'Angela',
                'false_answer_1' => 'Patrick',
                'false_answer_2' => 'Marli',
                'false_answer_3' => 'Skuyyy',
                'species_id' => 1, // ID spesies Aves
            ],
            [
                'question' => 'What is the name food that the monkey eats?',
                'answers' => '3 pound of banana',
                'false_answer_1' => '5 pounds of banana',
                'false_answer_2' => '2 kg of banana',
                'false_answer_3' => 'a giraffe',
                'species_id' => 1, // ID spesies Aves
            ],
            [
                'question' => 'What is the favorite food of orangutan?',
                'answers' => 'Durian',
                'false_answer_1' => 'Rice',
                'false_answer_2' => 'Banana',
                'false_answer_3' => 'Berrys',
                'species_id' => 1, // ID spesies Aves
            ],

        ];

        // Loop untuk menambahkan data quiz
        foreach ($quizzes as $quiz) {
            Quiz::create($quiz);
        }
    }
}

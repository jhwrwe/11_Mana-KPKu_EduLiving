<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;
use App\Http\Requests\StoreQuizRequest;
use App\Http\Requests\UpdateQuizRequest;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $getquiz = Quiz::where('species_id', $id)->get();
        return view('quiz', compact('getquiz'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function check(Request $request)
    {
        $userAnswers = $request->input('answers');
        $correctAnswersCount = 0;

        foreach ($userAnswers as $questionId => $userAnswer) {
            $question = Quiz::find($questionId);

            if ($question && $question->answers === $userAnswer) {
                $correctAnswersCount++;
            }
        }

        if ($correctAnswersCount >= 3) {
            $message = "Congratulations! You've answered $correctAnswersCount questions correctly and won the prize!";
        } else {
            $message = "Sorry, you need to answer at least 3 questions correctly to win the prize. You've answered $correctAnswersCount questions correctly.";
        }

        return view('quiz.index', compact('message'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreQuizRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Quiz $quiz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quiz $quiz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateQuizRequest $request, Quiz $quiz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quiz $quiz)
    {
        //
    }
}

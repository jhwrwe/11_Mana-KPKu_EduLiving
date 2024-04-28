@extends('layouts.app')
@section('content')
<div class="container mt-5 mb-5">
    <h1>Quiz</h1>
    <form action="{{ route('quiz.check') }}" method="POST">
        @csrf
        @foreach($getquiz as $quiz)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $quiz->question }}</h5>
                    <input type="hidden" name="answers[{{ $quiz->id }}]" value="{{ $quiz->answers }}">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answers[{{ $quiz->id }}]" id="answer_{{ $quiz->id }}_1" value="{{ $quiz->answers }}">
                        <label class="form-check-label" for="answer_{{ $quiz->id }}_1">{{ $quiz->answers }}</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answers[{{ $quiz->id }}]" id="answer_{{ $quiz->id }}_2" value="{{ $quiz->false_answer_1 }}">
                        <label class="form-check-label" for="answer_{{ $quiz->id }}_2">{{ $quiz->false_answer_1 }}</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answers[{{ $quiz->id }}]" id="answer_{{ $quiz->id }}_3" value="{{ $quiz->false_answer_2 }}">
                        <label class="form-check-label" for="answer_{{ $quiz->id }}_3">{{ $quiz->false_answer_2 }}</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answers[{{ $quiz->id }}]" id="answer_{{ $quiz->id }}_4" value="{{ $quiz->false_answer_3 }}">
                        <label class="form-check-label" for="answer_{{ $quiz->id }}_4">{{ $quiz->false_answer_3 }}</label>
                    </div>
                </div>
            </div>
        @endforeach
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @if (session('message'))
        <div class="alert alert-info mt-3">
            {{ session('message') }}
        </div>
    @endif
</div>
@endsection

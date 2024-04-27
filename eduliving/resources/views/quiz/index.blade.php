@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Quiz</h1>

        <div class="alert alert-info">
            {{ $message }}
        </div>


        <form action="{{ route('quiz.check') }}" method="POST">
            @csrf
            <!-- Your form inputs and quiz questions go here -->
            <a href="/gacha/mamalia" class="btn btn-primary">Go to Galeri Mamalia</a>
        </form>
</div>
@endsection


@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-24">
            <div class="row">
                @foreach($animals as $animal)
                <a href="{{ route('detail', ['id' => $animal->id]) }}" class="col-lg-3 col-md-4 col-6 my-3">
                    <img src="{{ $animal->image }}" class="img-fluid card">
                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection

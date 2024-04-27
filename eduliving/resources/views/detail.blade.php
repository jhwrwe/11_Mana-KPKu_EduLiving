@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Detail Animal</div>

                    <div class="card-body">
                        <div class="mb-3">
                            <img src="{{ asset('storage/' . $animal->image) }}" alt="{{ $animal->animal_name }}"
                                 class="img-fluid" style="max-height: 300px;">
                        </div>
                        <div class="mb-3">
                            <h2>{{ $animal->animal_name }}</h2>
                            <p><strong>Latin Name:</strong> {{ $animal->latin_name }}</p>
                            <p><strong>Species:</strong> {{ $animal->species->species_name }}</p>
                            <p><strong>Habitat:</strong> {{ $animal->habitat }}</p>
                            <p><strong>Continent:</strong> {{ $animal->continent }}</p>
                            <p><strong>Description:</strong> {{ $animal->description }}</p>
                        </div>
                        <!-- You can add more details here if needed -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

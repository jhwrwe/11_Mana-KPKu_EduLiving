@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Detail Animal</div>
                    @foreach ($animal as $eada)
                    <div class="card-body">
                        <div class="mb-3">
                            <img src="{{ asset('storage/' . $animal->image) }}" alt="{{ $animal->animal_name }}"
                                 class="img-fluid" style="max-height: 300px;">
                        </div>

                        <div class="mb-3">
                            <h2>{{ $eada->animal_name }}</h2>
                            <p><strong>Latin Name:</strong> {{ $as->latin_name }}</p>
                            <p><strong>Species:</strong> {{ $as->species->species_name }}</p>
                            <p><strong>Habitat:</strong> {{ $as->habitat }}</p>
                            <p><strong>Continent:</strong> {{ $as->continent }}</p>
                            <p><strong>Description:</strong> {{ $as->description }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

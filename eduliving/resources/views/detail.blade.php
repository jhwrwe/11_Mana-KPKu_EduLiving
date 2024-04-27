@extends('layouts.app')
@section('content')
    <div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <div class="card bg-light" style="border: 2px solid #4CAF50;">
                <div class="card-header bg-light text-black">
                    <h2 class="text-center">{{ $animal->animal_name }}</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="/images/{{$animal->image}}" alt="{{ $animal->animal_name }}"
                                class="img-fluid" style="min-width: 200px; min-height: 200px; width: 100%;">
                        </div>
                        <div class="col-md-6">
                            <p class="lead">Latin name: {{$animal->latin_name}}</p>
                            <p class="lead">Species:
                                @if ($animal->species_id == 1)
                                    Mamalia
                                @elseif ($animal->species_id == 2)
                                    Aves
                                @elseif ($animal->species_id == 3)
                                    Pisces
                                @else
                                    Reptillia
                                @endif
                            </p>
                            <p class="lead">Habitat: {{$animal->habitat}}</p>
                            <p class="lead">Continent: {{$animal->continent}}</p>
                            <p class="lead">Description: {{$animal->description}}</p>
                            <div class="mt-4 text-left">
                                @if ($animal->species_id == 1)
                                <a href="{{ route('gallery.species', ['species' => "Mamalia"]) }}" class="btn btn-primary bg-dark">Back</a>
                                @elseif ($animal->species_id == 2)
                                <a href="{{ route('gallery.species', ['species' => "Aves"]) }}" class="btn btn-primary bg-dark">Back</a>
                                @elseif ($animal->species_id == 3)
                                <a href="{{ route('gallery.species', ['species' => "Pisces"]) }}" class="btn btn-primary bg-dark">Back</a>
                                @else
                                <a href="{{ route('gallery.species', ['species' => "Reptilia"]) }}" class="btn btn-primary bg-dark">Back</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

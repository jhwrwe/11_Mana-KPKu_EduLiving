<!-- resources/views/animals/index.blade.php -->
@extends('layouts.app')
@section('content')

<div class="container mx-auto mt-8">

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach ($user_animals as $user_animal)
        <div class="animal-card bg-white rounded-lg shadow-md overflow-hidden">
            <img src="{{ asset('images/' . $user_animal['animal']->animal_image) }}" alt="{{ $user_animal->animal->animal_name }}" class="w-full h-auto object-cover">
            <div class="px-6 py-4">
                <h2 class="text-xl font-semibold mb-2">
                    <a href="/animals/{{ $user_animal['id'] }}" class="text-blue-600 hover:underline">{{ $user_animal->animal->animal_name }}</a>
                </h2>
                <div class="text-gray-600 text-sm line-clamp-3 overflow-hidden whitespace-pre-wrap">
                    {!! nl2br(Str::limit($user_animal['descriptions'], 120)) !!}
                </div>
            </div>
            <div class="animal-card-hover absolute inset-0 bg-gray-800 bg-opacity-50 hover:bg-opacity-0 transition duration-300 ease-in-out flex flex-col items-center justify-center">
                <a href="/animals/{{ $user_animal['id'] }}" class="text-white text-xl hover:underline">View Details</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection

{{-- <div class="container mt-5">
        <h1 class="mb-4">Your Animals</h1>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Animal Name</th>
                        <th>Latin Name</th>
                        <th>Habitat</th>
                        <th>Continent</th>
                        <th>Description</th>
                        <th>Species</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user_animals as $user_animal)
                        <tr>
                            <td>{{ $user_animal->animal->animal_name }}</td>
                            <td>{{ $user_animal->animal->latin_name }}</td>
                            <td>{{ $user_animal->animal->habitat }}</td>
                            <td>{{ $user_animal->animal->continent }}</td>
                            <td>{{ $user_animal->animal->description }}</td>
                            <td>{{ $user_animal->animal->species_id }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div> --}}

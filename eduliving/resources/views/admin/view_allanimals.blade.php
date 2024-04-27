@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <h1>Your Animals</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Animal</th>
                    {{-- <th>Image</th> --}}
                    <th>Latin Name</th>
                    <th>Habitat</th>
                    <th>Continent</th>
                    <th>Description</th>
                    <th>Species</th>
                </tr>
            </thead>
            <tbody>
                @foreach($animalls as $user_animal)
                <tr>
                    <td>{{ $user_animal->animal_name }}</td>
                    {{-- <td><img src="{{ asset('storage/'.$user_animal->animal->image) }}" alt="{{ $user_animal->animal->animal_name }}" style="max-width: 100px;"></td> --}}
                    <td>{{ $user_animal->latin_name  }}</td>
                    {{-- <td>{{ $user_animal->animal->species->species_name }}</td> --}}
                    <td>{{ $user_animal->habitat }}</td>
                    <td>{{ $user_animal->continent }}</td>
                    <td>{{ $user_animal->description }}</td>
                    <td>{{ $user_animal->species_id }}</td> {{-- Tambahkan baris ini untuk menampilkan nama spesies --}}
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    @endsection

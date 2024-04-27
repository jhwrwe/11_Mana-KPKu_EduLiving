<!-- resources/views/animals/index.blade.php -->
@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Animals</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Your Animals</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Animal Name</th>
                    {{-- <th>Image</th> --}}
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
                    {{-- <td><img src="{{ asset('storage/'.$user_animal->animal->image) }}" alt="{{ $user_animal->animal->animal_name }}" style="max-width: 100px;"></td> --}}
                    <td>{{ $user_animal->animal->latin_name }}</td>
                    {{-- <td>{{ $user_animal->animal->species->species_name }}</td> --}}
                    <td>{{ $user_animal->animal->habitat }}</td>
                    <td>{{ $user_animal->animal->continent }}</td>
                    <td>{{ $user_animal->animal->description }}</td>
                    <td>{{ $user_animal->animal->species_id }}</td> {{-- Tambahkan baris ini untuk menampilkan nama spesies --}}
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>

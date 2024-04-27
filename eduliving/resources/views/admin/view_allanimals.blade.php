@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <h1>Your Animals</h1>
        <form method="GET" action="{{ route('create_animal') }}">
                <br>
                <button class="btn tambah-button" href="{{ route('create_animal') }}">
                    Tambah
                </button>
            </form>
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
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($animalls as $user_animal)
                <tr>
                    <td>{{ $user_animal->animal_name }}</td>
                    <td>

                    <img src="/images/{{ $user_animal->image }}" alt=" 1 Animal Image" style="max-width: 100px;">

                    </td>

                    <td>{{ $user_animal->latin_name  }}</td>
                    {{-- <td>{{ $user_animal->animal->species->species_name }}</td> --}}
                    <td>{{ $user_animal->habitat }}</td>
                    <td>{{ $user_animal->continent }}</td>
                    <td>{{ $user_animal->description }}</td>
                    <td>{{ $user_animal->species_id }}</td> {{-- Tambahkan baris ini untuk menampilkan nama spesies --}}
                    <td>
                        <form action="{{ route('delete_animal', $user_animal) }}" method="POST">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger" id="delete" name="delete">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    @endsection

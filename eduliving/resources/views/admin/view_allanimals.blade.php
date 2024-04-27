@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <h1>Your Animals</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Animal</th>
                    <th>Image</th>
                    <th>Latin Name</th>
                    <th>Habitat</th>
                    <th>Continent</th>
                    <th>Description</th>
                    <th>Species</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($animalls as $user_animal)
                    <tr>
                        <td>{{ $user_animal->animal_name }}</td>
                        <td><img src="/images/{{ $user_animal->image }}" alt="ada" style="max-width: 100px;"></td>
                        <td>{{ $user_animal->latin_name }}</td>
                        {{-- <td>{{ $user_animal->species_name }}</td> --}}
                        <td>{{ $user_animal->habitat }}</td>
                        <td>{{ $user_animal->continent }}</td>
                        <td>{{ $user_animal->description }}</td>
                        <td>
                            @if ($user_animal->species_id == 1)
                                Mamalia
                            @elseif ($user_animal->species_id == 2)
                                Aves
                            @elseif ($user_animal->species_id == 3)
                                Pisces
                            @else
                                Reptillia
                            @endif
                        </td>
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

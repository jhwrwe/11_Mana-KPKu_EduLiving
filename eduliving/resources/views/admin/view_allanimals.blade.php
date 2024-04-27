@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">All Animals</h1>
        <div class="d-flex justify-content-end mb-2">
            <a href="{{ route('create_animal') }}" class="btn btn-primary">Tambah</a>
        </div>
        <div class="table-responsive mb-5">
            <table class="table table-striped">
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
                            <td>
                                <img src="/images/{{ $user_animal->image }}" alt="no image"
                                    style="max-width: 100px;">
                            </td>
                            <td>{{ $user_animal->latin_name }}</td>
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
                                <form action="{{ route('delete_animal', $user_animal) }}" method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this animal?')">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

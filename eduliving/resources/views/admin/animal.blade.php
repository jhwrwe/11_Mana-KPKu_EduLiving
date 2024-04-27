
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Animals</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>List of Animals</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Animal Name</th>
                    <th>Image</th>
                    <th>Latin Name</th>
                    <th>Species</th>
                    <th>Habitat</th>
                    <th>Continent</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach($animals as $animal)
                <tr>
                    <td>{{ $animal->animal_name }}</td>
                    <td><img src="{{ asset('storage/'.$animal->image) }}" alt="{{ $animal->animal_name }}" style="max-width: 100px;"></td>
                    <td>{{ $animal->latin_name }}</td>
                    <td>{{ $animal->species }}</td>
                    <td>{{ $animal->habitat }}</td>
                    <td>{{ $animal->continent }}</td>
                    <td>{{ $animal->description }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>

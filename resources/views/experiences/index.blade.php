<!-- resources/views/experiences/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experiences</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Experiences</h1>
        <a href="{{ route('experiences.create') }}" class="btn btn-primary mb-3">Add New Experience</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Company</th>
                    <th>Position</th>
                    <th>User</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($experiences as $experience)
                    <tr>
                        <td>{{ $experience->company }}</td>
                        <td>{{ $experience->position }}</td>
                        <td>{{ $experience->user->name }}</td>
                        <td>
                            <a href="{{ route('experiences.show', $experience) }}" class="btn btn-info">View</a>
                            <a href="{{ route('experiences.edit', $experience) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('experiences.destroy', $experience) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>

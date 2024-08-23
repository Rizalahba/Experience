<!-- resources/views/experiences/show.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experience Details</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Experience Details</h1>
        <div class="card">
            <div class="card-header">
                <h2>{{ $experience->company }} - {{ $experience->position }}</h2>
            </div>
            <div class="card-body">
                <p><strong>User:</strong> {{ $experience->user->name }}</p>
                <p><strong>Company:</strong> {{ $experience->company }}</p>
                <p><strong>Position:</strong> {{ $experience->position }}</p>
                <p><strong>Description:</strong> {{ $experience->description }}</p>
                <p><strong>Start Date:</strong> {{ $experience->start_date ? \Carbon\Carbon::parse($experience->start_date)->format('d M Y') : 'N/A' }}</p>
                <p><strong>End Date:</strong> {{ $experience->end_date ? \Carbon\Carbon::parse($experience->end_date)->format('d M Y') : 'Present' }}</p>
                <a href="{{ route('experiences.index') }}" class="btn btn-secondary">Back to List</a>
            </div>
        </div>
    </div>
</body>
</html>

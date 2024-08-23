<!-- resources/views/users/show.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>User Details</h1>
        <div class="card">
            <div class="card-header">
                <h2>{{ $user->name }}</h2>
            </div>
            <div class="card-body">
                <p><strong>Email:</strong> {{ $user->email }}</p>
                
                <h3>Experiences:</h3>
                @if($experiences->isEmpty())
                    <p>No experiences found for this user.</p>
                @else
                    <ul class="list-group">
                        @foreach($experiences as $experience)
                            <li class="list-group-item">
                                <h5>{{ $experience->company }} - {{ $experience->position }}</h5>
                                <p><strong>Description:</strong> {{ $experience->description }}</p>
                <p><strong>Start Date:</strong> {{ $experience->start_date ? \Carbon\Carbon::parse($experience->start_date)->format('d M Y') : 'N/A' }}</p>
                <p><strong>End Date:</strong> {{ $experience->end_date ? \Carbon\Carbon::parse($experience->end_date)->format('d M Y') : 'Present' }}</p>
                            </li>
                        @endforeach
                    </ul>
                @endif
                
                <a href="{{ route('users.index') }}" class="btn btn-secondary mt-3">Back to Users List</a>
            </div>
        </div>
    </div>
</body>
</html>

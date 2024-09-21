<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploaded Images</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Uploaded Images</h2>

        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <div class="row">
            @foreach ($images as $image)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ asset('storage/' . $image->file_path) }}" class="card-img-top" alt="Image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $image->title ?? 'No Title' }}</h5>
                        <p class="card-text">{{ $image->description ?? 'No Description' }}</p>
                        <p class="card-text"><small class="text-muted">Uploaded on {{ $image->created_at->format('M d, Y') }}</small></p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>
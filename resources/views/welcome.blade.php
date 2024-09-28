<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Management</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5 text-center">
        <h1>Product Management</h1>
        <p>Dofi Saputra - 41522110006 - Web Enterprise</p>

        <div class="mt-4">
            <!-- Button to navigate to the image upload page -->
            <a href="{{ route('image.upload') }}" class="btn btn-primary btn-lg mb-3">Upload Product</a>
            
            <!-- Button to navigate to the image list page -->
            <a href="{{ route('image.list') }}" class="btn btn-success btn-lg mb-3">View Uploaded Product</a>
        </div>
    </div>
</body>
</html>

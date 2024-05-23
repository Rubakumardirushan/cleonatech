<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header bg-secondary text-white">
                <h2>Thank You!</h2>
            </div>
            <div class="card-body">
                <p>Hello, {{ $name }}</p>
                <p>Thank you for your message.</p>
            </div>
            <div class="card-footer text-muted">
                <small>&copy; 2024 CLEONATECH. All rights reserved.</small>
            </div>
        </div>
    </div>
</body>
</html>

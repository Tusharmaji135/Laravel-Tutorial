<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .card {
            max-width: 500px;
            margin: 20px auto;
            position: relative;
        }
        .back-icon {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 1.5rem;
            color: #fff;
            text-decoration: none;
        }
        .back-icon:hover {
            color: #f8f9fa;
        }
        .list-group-item span {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white text-center position-relative">
                <h1 class="h4">User Details</h1>
                <a href="/users" class="back-icon"><i class="bi bi-arrow-left-circle"></i></a>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><span>ID:</span> {{$data->id}}</li>
                <li class="list-group-item"><span>NAME:</span> {{$data->name}}</li>
                <li class="list-group-item"><span>EMAIL:</span> {{$data->email}}</li>
                <li class="list-group-item"><span>AGE:</span> {{$data->age}}</li>
                <li class="list-group-item"><span>CITY:</span> {{$data->city}}</li>
                {{-- <li class="list-group-item"><span>CREATED AT:</span> {{$data->created_at}}</li>
                <li class="list-group-item"><span>UPDATED AT:</span> {{$data->updated_at}}</li> --}}
            </ul>
        </div>
    </div>
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

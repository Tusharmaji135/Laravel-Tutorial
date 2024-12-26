<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container py-5">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h2 class="fw-bold text-primary">File Upload Portal</h2>
                <p class="text-muted">Upload your files securely and manage them efficiently</p>
            </div>
        </div>

        <form action="{{route('user.store')}}" method="POST" enctype="multipart/form-data" class="mb-5">
            @csrf
            <div class="row mb-3">
                <div class="col-md-6 offset-md-3">
                    <label for="photo" class="form-label">Choose File</label>
                    <input type="file" id="photo" name="photo" accept=".jpg,.png,.jpeg,.pdf" class="form-control">
                    @error('photo')
                        <div class="alert alert-danger mt-2">{{$message}}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 offset-md-3 text-center">
                    <button type="submit" class="btn btn-primary px-4">Upload</button>
                </div>
            </div>
        </form>

        @if (session('status'))
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="alert alert-success text-center">
                    {{ session('status') }}
                </div>
            </div>
        </div>
        @endif

        <div class="row g-4">
            @foreach ($users as $user)
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{asset('storage/'.$user->file_name)}}" class="card-img-top img-thumbnail" alt="Uploaded File">
                    <div class="card-body text-center">
                        <form action="{{route('user.destroy',$user->id)}}" method="POST" class="d-inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                        <a href="{{route('user.edit',$user->id)}}" class="btn btn-warning btn-sm ms-2">Update</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-VYC9VGAUTqio2HBVVzjKQpUQUAJ6I3NafPtZBZoQyyImspaFuKQtb83S4P2dGw7d"
        crossorigin="anonymous"></script>
</body>

</html>

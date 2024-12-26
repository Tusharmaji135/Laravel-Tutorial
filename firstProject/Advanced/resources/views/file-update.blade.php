{{-- -- Active: 1730294781490@@127.0.0.1@3306@advanced --}}
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
        <h2 class="fw-bold text-primary"><b>UPDATE</b> : File Upload</h2>
        <p class="text-muted">Upload your files securely and manage them efficiently</p>
      </div>
    </div>

    <form action="{{route('user.update',$user->id)}}" method="POST" enctype="multipart/form-data" class="mb-5">
      @csrf
      @method('PUT')
      <div class="row mb-3">
        <div class="col-md-2 offset-md-3">
          <img id="output" src="{{asset('storage/'.$user->file_name)}}" class="card-img-top img-thumbnail" alt="">
        </div>
        <div class="col-md-4">
          <label for="photo" class="form-label">Choose File</label>
          <input type="file" id="photo" name="photo" accept=".jpg,.png,.jpeg,.pdf" class="form-control">
          @error('photo')
          <div class="alert alert-danger mt-2">{{$message}}</div>
          @enderror
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 offset-md-3 text-center">
          <button type="submit" class="btn btn-success px-4">UPDATE</button>
        </div>
      </div>
    </form>

   

    
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-VYC9VGAUTqio2HBVVzjKQpUQUAJ6I3NafPtZBZoQyyImspaFuKQtb83S4P2dGw7d" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    $(document).ready(function () {
      $('#photo').change(function () { 
        $('#output').attr('src', window.URL.createObjectURL(this.files[0]));
      });
    });
  </script>
</body>


</html>
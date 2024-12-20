<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>HEADER PAGE</h1>
  {{-- @foreach ($names as $name)
      <p>{{$name}}</p>
  @endforeach --}}

  @forelse ($names as $name)
  <p>{{$name}}</p>
  @empty
      <h2>NO daAta found</h2>
  @endforelse
</body>
</html>
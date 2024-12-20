<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  @include('pages.header',['name'=>"POST PAGE"])
  
<h1>POST PAGE</h1>

{{-- <h3>{{$status}}</h3> --}}

@for ($i = 1; $i < 11; $i++)
    <li>the total = {{$i}}</li>
@endfor

</body>
</html>
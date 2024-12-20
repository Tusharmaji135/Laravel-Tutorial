<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Website - @yield('title','Website')</title>
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
  <header>
    <h1>My Simple Website</h1>
  </header>

  <nav>
    <a href="/">Home</a>
    <a href="/about">About</a>
    <a href="/contact">Contact</a>
  </nav>
  
  <div class="content">
    @hasSection ('content')
      @yield('content')
    @else
      <h2>NO CONTENT AVAILABLE...</h2>
    @endif
  </div>
  <div class="container">
    <div class="sidebar">
      <h2>Sidebar</h2>
      <ul>
        @section('sidebar')
        <li><a href="#">Link 1</a></li>
        <li><a href="#">Link 2</a></li>
        <li><a href="#">Link 3</a></li>
        @show
      </ul>
    </div>
  </div>
  @stack('script')
</body>

</html>
@extends('layouts.masterLayout')



@section('content')
<h2>Content Area</h2>
<p>This is the main content area where you can add information about your website.</p>
<a href="{{route('blog')}}">BLOG</a>
@endsection


@section('title')
    Home
@endsection

@push('script')
    <script src="/start.js">

    </script>
@endpush






































































{{-- @php
    $fruits = array("apple", "banana", "Orange", "Grapes");
@endphp


@include('pages.header',['names'=>$fruits])

<h1>OUR FIRST PAGE</h1>

<a href="/contact">contact</a>
<a href="{{route('mypost')}}">post</a> <br>


{{45+58}}
<br>
{{"Hello World"}}
<br>
{{"<h1>Hello World</h1>"}} //wrong
{!!"<h1>Hello World</h1>"!!} //correct

{{-- {!!"<script>
  alert('Good Morning')
</script>"!!} --}}
{{-- @yield('name') --}}


{{-- include --}}
{{-- @include('post',['status' => 'Hello Tushar']) --}}
{{-- @include('pages.footer') --}}
{{-- @include('pages.footer') --}}
{{-- @includeIf('con', ['some' => 'data'])  @include if exists --}}
{{-- @includeWhen($boolean, 'view.name', ['some' => 'data'])
{{-- @includeUnless($boolean, 'view.name', ['some' => 'data']) --}}


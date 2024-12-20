@extends('layouts.masterLayout')

@section('content')
{{-- <h2>About Area</h2>
<p>This is the About content area where you can add information about your website.</p> --}}
@endsection

@section('title')
About
@endsection


@section('sidebar')
@parent
<li>This is appended to the master side bar</li>
@endsection
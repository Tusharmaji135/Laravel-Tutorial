
@extends('layout')
@section('title')
    USER DETAILS
@endsection

@section('content')
<table class="table table-striped table-bordered ">
  <tbody>
      <tr>
          <th>Name:</th>
          <td>{{$user->name}}</td>
      </tr>
      <tr>
          <th>Email:</th>
          <td>{{$user->email}}</td>
      </tr>
      <tr>
          <th>Age:</th>
          <td>{{$user->age}}</td>
      </tr>
      <tr>
          <th>City:</th>
          <td>{{$user->city}}</td>
      </tr>
  </tbody>
</table>
<a href="{{route('user.index')}}" class="btn btn-secondary">Back</a>
@endsection


@extends('layout')
@section('title')
    UPDATE USER DATA
@endsection

@section('content') 
<form action="{{route('user.update',$user)}}" method="POST" class="border p-4 rounded shadow">
    @csrf
    @method('PUT')
  <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" value="{{$user->name}}" required>
  </div>
  <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" value="{{$user->email}}" required>
  </div>
  <div class="mb-3">
      <label for="age" class="form-label">Age</label>
      <input type="number" class="form-control" id="age" name="age" placeholder="Enter your age" value="{{$user->age}}" required>
  </div>
  <div class="mb-3">
      <label for="city" class="form-label">City</label>
      <input type="text" class="form-control" id="city" name="city" placeholder="Enter your city" value="{{$user->city}}" required>
  </div>
  <div class="mb-3">
    <input type="submit" value="save" class="btn btn-success">
  </div>
</form>
@endsection
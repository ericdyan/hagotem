@extends('layout')
@section('title', 'Signup')
@section('main')
<div class="row justify-content-center mt-5">
    <h5>Welcome!</h5>
</div>
<div class="row justify-content-center">
  <div class="col"></div>
  <div class="col">
    <form method="post">
      @csrf
      <div class="form-group">
        <label for="firstName">First Name</label>
        <input type="text" class="form-control" name="firstName" id="firstName">
      </div>
      <div class="form-group">
        <label for="lastName">Last Name</label>
        <input type="text" class="form-control" name="lastName" id="lastName">
      </div>
      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" class="form-control" name="email" id="email">
      </div>
      <div class="form-group">
        <label for="birthday">Birthday</label>
        <input type="date" class="form-control" name="birthday" id="email">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" id="password">
      </div>
      <button type="submit" class="btn btn-primary">Sign up</button>
    </form>
  </div>
  <div class="col"></div>
</div>
@endsection

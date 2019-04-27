@extends('layout')
@section('title', 'Login')
@section('main')
<div class="row justify-content-center mt-5">
    <h5>Welcome Back!</h5>
</div>
<div class="row justify-content-center">
  <div class="col"></div>
  <div class="col">
    <div class="mt-5">
      <form class="" action="" method="post">
        @csrf
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" class="form-control" name="email" id="email">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" name="password" id="password">
        </div>
        <div class="d-flex justify-content-center m-4">
          <button type="submit" class="btn btn-primary">LOGIN</button>
        </div>
        <div class="d-flex justify-content-center">
          <a href="/signup">Don't have an account?</a>
        </div>
      </form>
    </div>
  </div>
  <div class="col"></div>
</div>
@endsection

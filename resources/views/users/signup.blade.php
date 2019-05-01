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
        <input type="text" value="{{old('firstName')}}" class="form-control" name="firstName" id="firstName">
        <small class="text-danger">{{$errors->first('firstName')}}</small>
      </div>
      <div class="form-group">
        <label for="lastName">Last Name</label>
        <input type="text" value = "{{old('lastName')}}" class="form-control" name="lastName" id="lastName">
        <small class="text-danger">{{$errors->first('lastName')}}</small>
      </div>
      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" value = "{{old('email')}}" class="form-control" name="email" id="email">
        <small class="text-danger">{{$errors->first('email')}}</small>
      </div>
      <div class="form-group">
        <label for="birthday">Birthday</label>
        <input type="date" value = "{{old('birthday')}}" class="form-control" name="birthday" id="email">
        <small class="text-danger">{{$errors->first('birthday')}}</small>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password_confirmation" id="password">
        <small class="text-danger">{{$errors->first('password')}}</small>
      </div>
      <div class="form-group">
        <label for="password_confirmation">Re-type Password</label>
        <input type="password" class="form-control" name="password" id="password">
      </div>
      <button type="submit" class="btn btn-primary">Sign up</button>
    </form>
  </div>
  <div class="col"></div>
</div>
@endsection

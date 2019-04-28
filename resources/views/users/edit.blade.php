@extends('layout')
@section('title', 'Edit')
@section('main')
<form class="mt-2" action="" method="post">
    @csrf
    <div class="form-group">
      <label for="email">Email: </label>
      <input class="form-control" type="text" name="email" id="email" value="{{$user->email}}">
      <small class="text-danger">{{$errors->first('email')}}</small>
    </div>
    <div class="form-group">
      <label for="firstName">First Name: </label>
      <input class="form-control" type="text" name="firstName" id="firstName" value="{{$userInfo->first_name}}">
      <small class="text-danger">{{$errors->first('firstName')}}</small>
    </div>
    <div class="form-group">
      <label for="lastName">Last Name: </label>
      <input class="form-control" type="text" name="lastName" id="lastName" value="{{$userInfo->last_name}}">
      <small class="text-danger">{{$errors->first('lastName')}}</small>
    </div>
    <div class="form-group">
      <label for="birthday">Birthday: </label>
      <input class="form-control" type="date" name="birthday" id="birthday" value="{{$userInfo->birthday}}">
      <small class="text-danger">{{$errors->first('birthday')}}</small>
    </div>
    <div class="form-group">
      <label for="address1">Address Line 1: </label>
      <input class="form-control" type="text" name="address1" id="address1" value="{{$userAddress->address1}}">
      <small class="text-danger">{{$errors->first('address1')}}</small>
    </div>
    <div class="form-group">
      <label for="address2">Address Line 2: </label>
      <input class="form-control" type="text" name="address2" id="address2" value="{{$userAddress->address2}}">
      <small class="text-danger">{{$errors->first('address2')}}</small>
    </div>
    <div class="form-group">
      <label for="city">City: </label>
      <input class="form-control" type="text" name="city" id="city" value="{{$userAddress->city}}">
      <small class="text-danger">{{$errors->first('city')}}</small>
    </div>
    <div class="form-group">
      <label for="state">State: </label>
      <input class="form-control" type="text" name="state" id="state" value="{{$userAddress->state}}">
      <small class="text-danger">{{$errors->first('state')}}</small>
    </div>
    <div class="form-group">
      <label for="zipCode">Zip Code: </label>
      <input class="form-control" type="number" name="zipCode" id="zipCode" value="{{$userAddress->zip_code}}">
      <small class="text-danger">{{$errors->first('zipCode')}}</small>
    </div>
    <button class="btn btn-primary" type="submit" name="button">Save</button>
  </form>
@endsection

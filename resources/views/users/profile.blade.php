@extends('layout')
@section('title', 'My Profile')
@section('main')
<h1>Welcome back, {{$userInfo->first_name}}</h1>
<h3>My Information</h3>
<p>Email: {{$user->email}}</p>
<p>First Name: {{$userInfo->first_name}}</p>
<p>Last Name: {{$userInfo->last_name}}</p>
<p>Birthday: {{$userInfo->birthday}}</p>
<p>Address Line 1: {{$userAddress->address1}}</p>
<p>Address Line 2: {{$userAddress->address2}}</p>
<p>City: {{$userAddress->city}}</p>
<p>State: {{$userAddress->state}}</p>
<p>Zip code: {{$userAddress->zip_code}}</p>
<a href="/edit" class="btn btn-primary">Edit</a>


@endsection

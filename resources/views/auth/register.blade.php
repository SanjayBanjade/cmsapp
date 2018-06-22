@extends('master')

@section('title')
  Register - CMS APP
@endsection

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endsection

@section('register')
  <form class="form-signin" method="post" accept-charset="utf8" action="/register">
    @csrf
    <img class="mb-4" src="http://logo.kenh.net/logo/bootstrap-4.svg.png" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Please Register</h1>
    <label for="inputFirstName" class="sr-only">First Name</label>
    <input name="fname" type="string" id="inputFirstName" class="form-control" placeholder="First Name" autofocus value="{{old('fname')}}">
    @if($errors->has('fname'))
      <div class="alert-danger">
        <p>First Name is required</p>
      </div>
    @endif
    <label for="inputLastName" class="sr-only">Last Name</label>
    <input name="lname" type="string" id="inputLastName" class="form-control" placeholder="Last Name" autofocus value="{{old('lname')}}">
    @if($errors->has('lname'))
      <div class="alert-danger">
        <p>Last Name is required</p>
      </div>
    @endif
    <label for="inputEmail" class="sr-only">Email address</label>
    <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" autofocus value="{{old('email')}}">
    @if($errors->has('email'))
      <div class="alert-danger">
        <p>Email is required</p>
      </div>
    @endif
    <label for="inputPassword" class="sr-only">Password</label>
    <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password">
    @if($errors->has('password'))
      <div class="alert-danger">
        <p>Password is required</p>
      </div>
    @endif
    <button class="btn btn-lg btn-success btn-block" type="submit">Register</button>
    <br>
    <a href="/login" class="btn btn-primary">Login</a>
  </form>
@endsection
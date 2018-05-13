@extends('master')

@section('title')
  Register - CMS APP
@endsection

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endsection

@section('register')
  <form class="form-signin">
    <img class="mb-4" src="http://logo.kenh.net/logo/bootstrap-4.svg.png" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Please Register</h1>
    <label for="inputFirstName" class="sr-only">First Name</label>
    <input type="email" id="inputFirstName" class="form-control" placeholder="First Name" required autofocus>
    <label for="inputLastName" class="sr-only">Last Name</label>
    <input type="email" id="inputLastName" class="form-control" placeholder="Last Name" required autofocus>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
    <label for="inputConfirmPassword" class="sr-only">Confirm Password</label>
    <input type="password" id="inputConfirmPassword" class="form-control" placeholder="Confirm Password" required>
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="btn btn-lg btn-success btn-block" type="submit">Register</button>
    <br>
    <a href="/login" class="btn btn-primary">Login</a>
  </form>
@endsection
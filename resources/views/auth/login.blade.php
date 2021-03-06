@extends('master')

@section('title')
	Login - CMS APP
@endsection

@section('styles')
	<link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endsection

@section('login')
	<form class="form-signin" method="post" action="/login" accept-charset="utf8">
		@csrf
	  <img class="mb-4" src="http://logo.kenh.net/logo/bootstrap-4.svg.png" alt="" width="72" height="72">
	  <h1 class="h3 mb-3 font-weight-normal">Please Login</h1>
	  <label for="inputEmail" class="sr-only">Email address</label>
	  <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
	  <label for="inputPassword" class="sr-only">Password</label>
	  <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
	  <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
	  <br>
	  <a href="/register" class="btn btn-success">Create Account</a>
	  <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
	</form>
@endsection
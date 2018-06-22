@extends('master')

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
@endsection

@section('title')
  Home - CMS APP
@endsection

@section('welcome-descr')
<div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <h3 class="masthead-brand">CMS</h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link active" href="#">Home</a>
      </nav>
    </div>
  </header>

  <main role="main" class="inner cover">
    <h1 class="cover-heading">ULTIMATE CMS</h1>
    <p class="lead">Create your subscribers. Create your posts. Edit your posts. Delete your posts. Re-create your posts. See how your subscribers are doing and earn money making them buy products.</p>
    <p class="lead">
      <a href="/login" class="btn btn-lg btn-secondary">Login</a>
      <a href="/register" class="btn btn-lg btn-secondary">Register</a>
    </p>
  </main>

  <footer class="mastfoot mt-auto">
    <div class="inner">
      <p>Copyright <a href="http://cms.test">CMS APP</a>, by <a href="https://twitter.com/mdo">@sanjay</a>.</p>
    </div>
  </footer>
</div>
@endsection
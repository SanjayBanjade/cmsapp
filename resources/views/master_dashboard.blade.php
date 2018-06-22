<?php date_default_timezone_set("Asia/Kathmandu"); ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">
    @yield('title')
    @yield('styles')
	 <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <style>
    	body {
    		font-family: 'Roboto', sans-serif;
    	}
    </style>
    <script src="https://momentjs.com/downloads/moment.min.js"></script>
    <script src="https://momentjs.com/downloads/moment-timezone-with-data.min.js"></script>
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="{{route('logout')}}">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="{{route('dashboard')}}">
                  <span></span>
                  Dashboard <span class="sr-only"></span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span></span>
                  Profile
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span></span>
                  Posts
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('dashcreate')}}">
                  <span></span>
                  Create
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span></span>
                  Update
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span></span>
                  	Settings
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Upgrade Membership</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span></span>
                  Pricing
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Hello, {{Auth::user()->fname.' '.Auth::user()->lname}}!</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span></span>
                This week
              </button>
            </div>
          </div>
          @yield('navigation')
          @yield('contents')
        </main>
      </div>
    </div>
    @yield('scripts')
  </body>
</html>
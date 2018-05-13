<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('styles')
    <link rel = "icon" href="https://getbootstrap.com/favicon.ico">
  </head>

  <body class="text-center">
    <div id="cms-app">
        @yield('welcome-descr')
        
            @yield('login')

            @yield('register')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>

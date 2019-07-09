<!doctype html>
<html lang="fr">
<head>
  <meta name="description" content="@yield('title')">
  <meta name="keywords" content="">
  <meta name="author" name="Marouani Haythem">
  <meta charset="utf-8">
  <title>@yield('title')</title>

<link rel="stylesheet" href="{{asset('css/'.setting('site.th').'.min.css')}}">
@yield('stylesheets')
</head>

<body>

        @include('partials.navbar')
        @yield('slider')
        <div class="container mt-4">
             @yield('content')
        </div>
    
    <script src="{{asset('/js/jquery.js')}}"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    @yield('javascripts')


</body>
</html>
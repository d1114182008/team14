<!DOCTYPE html>
<html lang="zh-TW">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{ asset('css/styles2.css') }}"> 
</head>
<body>
  <header>
    @yield('header') 
  </header>

  <div class="container">
    @yield('content') 
  </div>

  <script src="{{ asset('js/scripts2.js') }}"></script> 
</body>
</html>
<!DOCTYPE html>
<html lang="zh-Hant">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', '原住民族部落永續發展造景計畫核定明細')</title>
  <link rel="stylesheet" href="{{ asset('css/stylesnew.css') }}">
</head>
<body>
  @include('header') 
  
  <div class="container">
    @yield('content') 
  </div>
  
  @include('footer') 
</body>
</html>

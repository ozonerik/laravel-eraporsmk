<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
@include('layout.includes.head-print')  
</head>
<body>
<div class="container">
@yield('content')
@include('layout.includes.footer-print') 
</div>
</body>
</html>

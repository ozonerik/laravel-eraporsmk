<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
@include('layout.includes.head-print')  
</head>
<body>
@yield('content')
@include('layout.includes.footer-print') 
</body>
</html>

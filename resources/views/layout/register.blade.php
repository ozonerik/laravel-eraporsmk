<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
@include('layout.includes.headlogin')   
</head>
<body class="hold-transition login-page">
@yield('content')
<!-- /.login-box -->

@include('layout.includes.footlogin') 
</body>
</html>

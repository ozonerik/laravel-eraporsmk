<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
@include('layout.includes.head')  
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

@include('layout.includes.header')   

  <!-- =============================================== -->
  <!-- Left side column. contains the sidebar -->
@include('layout.includes.sidebar-admin')
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
@yield('content')
  <!-- /.content-wrapper -->

@include('layout.includes.footer')
</body>
</html>

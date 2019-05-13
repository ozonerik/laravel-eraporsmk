@extends('layout.login')
@section('title','Login')
@section('content')
<div class="login-box">
  <div class="login-logo">
    <a href=""><img src="{{ asset('template/logo/erapor.png') }}" /></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Login Page
				@if(\Session::has('alert'))
                <div class="alert alert-danger alert-dismissible">
			    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <div class="icon fa fa-ban"> {{Session::get('alert')}}</div>
                </div>
				@endif
				@if(\Session::has('alert-success'))
                <div class="alert alert-success alert-dismissible">
			    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <div class="icon fa fa-check"> {{Session::get('alert-success')}}</div>
                </div>
				@endif
	</p>
    <form action="{{ url('/loginPost') }}" method="post">
	@csrf
      <div class="form-group has-feedback">
        <input name="username" id="username" type="text" class="form-control" placeholder="Username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="password" id="password" type="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
		  <a href="{{url('register')}}" class="btn btn-success btn-block fa fa-user-plus"> Register</a>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block fa fa-sign-in"> Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
@endsection

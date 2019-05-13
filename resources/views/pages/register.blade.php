@extends('layout.register')
@section('title','Register')
@section('content')
<div class="login-box">
  <div class="login-logo">
    <a href=""><img src="{{ asset('template/logo/erapor.png') }}" /></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Register Page
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-ban"></i> Kesalahan!</h4>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
	</p>
    <form action="{{ url('/registerPost') }}" method="post">
	@csrf
      <div class="form-group has-feedback">
		<label>Username</label>
        <input name="username" id="username" type="text" class="form-control" placeholder="Username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
		<div class="form-group has-feedback">
		<label>Email</label>
        <input name="email" id="email" type="email" class="form-control" placeholder="E-Mail">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
		<label>Password</label>
        <input name="password" id="password" type="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
	 <div class="form-group has-feedback">
		<label>Password Confirmation</label>
        <input name="confirmation" id="confirmation" type="password" class="form-control" placeholder="Password confirmation">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
	  <div class="form-group has-feedback">
	  	<label>Name</label>
        <input name="name" id="name" type="text" class="form-control" placeholder="Name">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
	  <div class="form-group has-feedback">
        <label>User Type</label>
                  <select name="user_type" class="form-control">
					<option selected hidden></option>
					@foreach ($groupuser as $tp)
					<option value="{{$tp->id_usertype}}">{{$tp->group_user}}</option>
					@endforeach
                  </select>
        <span class="form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
		  <a href="{{url('/login')}}" class="btn btn-danger btn-block fa fa-undo"> Cancel</a>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block fa fa-save"> Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
@endsection

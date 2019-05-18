<?php $__env->startSection('title','Login'); ?>
<?php $__env->startSection('content'); ?>
<div class="login-box">
  <div class="login-logo">
    <a href=""><img src="<?php echo e(asset('template/logo/erapor.png')); ?>" /></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Login Page
				<?php if(\Session::has('alert')): ?>
                <div class="alert alert-danger alert-dismissible">
			    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <div class="icon fa fa-ban"> <?php echo e(Session::get('alert')); ?></div>
                </div>
				<?php endif; ?>
				<?php if(\Session::has('alert-success')): ?>
                <div class="alert alert-success alert-dismissible">
			    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <div class="icon fa fa-check"> <?php echo e(Session::get('alert-success')); ?></div>
                </div>
				<?php endif; ?>
	</p>
    <form action="<?php echo e(url('/loginPost')); ?>" method="post">
	<?php echo csrf_field(); ?>
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
		  <!-- 
		  <a href="<?php echo e(url('register')); ?>" class="btn btn-success btn-block fa fa-user-plus"> Register</a> 
		  -->
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\erapor\resources\views/pages/login.blade.php ENDPATH**/ ?>
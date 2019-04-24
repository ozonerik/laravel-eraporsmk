<?php $__env->startSection('title','Home'); ?>
<?php $__env->startSection('content'); ?>
<div class="login-box">
  <div class="login-logo">
    <a href=""><img src="<?php echo e(asset('template/logo/erapor.png')); ?>" /></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Login Page
			<?php if(\Session::has('alert')): ?>
                <div class="alert alert-danger">
                    <div><?php echo e(Session::get('alert')); ?></div>
                </div>
            <?php endif; ?>
            <?php if(\Session::has('alert-success')): ?>
                <div class="alert alert-success">
                    <div><?php echo e(Session::get('alert-success')); ?></div>
                </div>
            <?php endif; ?>
	</p>
    <form action="<?php echo e(url('/loginPost')); ?>" method="post">
	<?php echo e(csrf_field()); ?>

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
		  <a href="<?php echo e(url('register')); ?>" class="btn btn-success btn-block btn-flat">Register</a>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\erapor\resources\views/pages/home.blade.php ENDPATH**/ ?>
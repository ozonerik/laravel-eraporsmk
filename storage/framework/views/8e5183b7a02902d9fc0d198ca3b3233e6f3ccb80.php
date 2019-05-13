<?php $__env->startSection('title','Register'); ?>
<?php $__env->startSection('content'); ?>
<div class="login-box">
  <div class="login-logo">
    <a href=""><img src="<?php echo e(asset('template/logo/erapor.png')); ?>" /></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Register Page
            <?php if($errors->any()): ?>
                <div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-ban"></i> Kesalahan!</h4>
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
	</p>
    <form action="<?php echo e(url('/registerPost')); ?>" method="post">
	<?php echo csrf_field(); ?>
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
					<?php $__currentLoopData = $groupuser; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option value="<?php echo e($tp->id_usertype); ?>"><?php echo e($tp->group_user); ?></option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
        <span class="form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
		  <a href="<?php echo e(url('/login')); ?>" class="btn btn-danger btn-block fa fa-undo"> Cancel</a>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.register', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\erapor\resources\views/pages/register.blade.php ENDPATH**/ ?>
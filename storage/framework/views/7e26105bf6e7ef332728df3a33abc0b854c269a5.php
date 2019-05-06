<!-- jQuery 3 -->
<script src="<?php echo e(asset('template/bower_components/jquery/dist/jquery.min.js')); ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo e(asset('template/bower_components/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
<!-- iCheck -->
<script src="<?php echo e(asset('template/plugins/iCheck/icheck.min.js')); ?>"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
	window.setTimeout(function() {
		$(".alert-danger").fadeTo(1000, 0).slideUp(1000, function(){
			$(this).remove(); 
		});
	}, 5000);
	window.setTimeout(function() {
		$(".alert-success").fadeTo(1000, 0).slideUp(1000, function(){
			$(this).remove(); 
		});
	}, 1000);
  });
</script><?php /**PATH C:\wamp64\www\erapor\resources\views/layout/includes/footlogin.blade.php ENDPATH**/ ?>
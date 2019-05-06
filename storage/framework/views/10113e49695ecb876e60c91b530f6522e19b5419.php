  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2019 <a href="mailto:ozonerik@gmail.com">M. Ade Erik</a>.</strong> All rights
    reserved.
  </footer>
  </div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo e(asset('template/bower_components/jquery/dist/jquery.min.js')); ?>" ></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo e(asset('template/bower_components/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
<!-- SlimScroll -->
<script src="<?php echo e(asset('template/bower_components/jquery/dist/jquery.min.js')); ?>"></script>
<!-- FastClick -->
<script src="<?php echo e(asset('template/bower_components/fastclick/lib/fastclick.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('template/dist/js/adminlte.min.js')); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(asset('template/dist/js/demo.js')); ?>"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
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
  })
</script><?php /**PATH C:\wamp64\www\erapor\resources\views/layout/includes/footer.blade.php ENDPATH**/ ?>
<!-- jQuery 3 -->
<script src="{{ asset('template/bower_components/jquery/dist/jquery.min.js') }}" ></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('template/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('template/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('template/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('template/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('template/dist/js/demo.js') }}"></script>
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
</script>
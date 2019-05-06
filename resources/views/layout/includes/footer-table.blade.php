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
<script src="{{ asset('template/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('template/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('template/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('template/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('template/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- iCheck 1.0.1 -->
<script src="{{ asset('template/plugins/iCheck/icheck.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('template/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('template/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('template/dist/js/demo.js') }}"></script>
<!-- page script -->
<script>
  $(function () {
    $('#table').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true,
	  "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50,100, "All"]],
    });
	    $('#check-all').click(function () {
        $('input[type=checkbox]').not(":disabled").prop('checked', this.checked);
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
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
	$('.selectall').click(function() {
		$('.selectbox').prop('checked',$(this).prop('checked'));
		$('.selectall2').prop('checked',$(this).prop('checked'));
	})
	$('.selectall2').click(function() {
		$('.selectbox').prop('checked',$(this).prop('checked'));
		$('.selectall').prop('checked',$(this).prop('checked'));
	})
	$('.selectbox').change(function() {
		var total = $('.selectbox').length();
		var number = $('.selectbox:checked').length();
		if(total==number){
			$('.selectall').prop('checked',true);
			$('.selectall2').prop('checked',true);
		}else{
			$('.selectall').prop('checked',false);
			$('.selectall2').prop('checked',false);
		}
	})
  })
</script>
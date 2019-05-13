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
<!-- FastClick -->
<script src="{{ asset('template/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('template/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('template/dist/js/demo.js') }}"></script>
<!-- page script -->
<script>
$(function () {
    $('#userTable').DataTable({
	  'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true,
	  "pagingType"	: "full_numbers",
	  "lengthMenu"	: [[10, 25, 50, 100, -1], [10, 25, 50,100, "All"]],
	  "columnDefs"	: [{ "orderable": false, "targets": [0,6] }],
	  "order": [[ 1, 'asc' ]]
    });
	

	$('#check_all').on('click', function(e) {
	 if($(this).is(':checked',true))  
	 {
		$(".checkbox").prop('checked', true);
		$('#check_all2').prop('checked',true);		
	 } else {  
		$(".checkbox").prop('checked',false); 
		$('#check_all2').prop('checked',false);		
	 }  
	});
	
	$('#check_all2').on('click', function(e) {
	 if($(this).is(':checked',true))  
	 {
		$(".checkbox").prop('checked', true);
		$('#check_all').prop('checked',true);			
	 } else {  
		$(".checkbox").prop('checked',false);
		$('#check_all').prop('checked',false);		
	 }  
	});

	 $('.checkbox').on('click',function(){
		if($('.checkbox:checked').length == $('.checkbox').length){
			$('#check_all').prop('checked',true);
			$('#check_all2').prop('checked',true);
		}else{
			$('#check_all').prop('checked',false);
			$('#check_all2').prop('checked',false);
		}
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
	
	$('#delModal').on('show.bs.modal', function (event) {
		var button = $(event.relatedTarget)
		var user_id = button.data('userid')
		var nama_user = button.data('namauser')
		var modal = $(this)
		modal.find('.modal-body #pesan').html('Apakah anda ingin menghapus user bernama: <br><div style="color:red">'+nama_user+'</div>');
		modal.find('.modal-body input').val(user_id)
	});
	
	$('#delallModal').on('show.bs.modal', function (event) {
		var button = $(event.relatedTarget); 
		var userid = [];
		var namaid = [];
		$.each($("input[name='checkId']:checked"), function(){            
			userid.push($(this).val());
			namaid.push($(this).data('nama'));
		});
		var userids = $.map(userid, function(value){
			return (value);
		});
		var namaids = $.map(namaid, function(value){
			return (value);
		});
		var modal = $(this)
		if(userids.length>0){
		modal.find('.modal-footer #tombol').html('<button type="submit" class="btn btn-danger fa fa-trash"> Delete Selected</button>')
		modal.find('.modal-body #pesan').html('Apakah anda ingin menghapus user bernama: <br><div style="color:red">'+namaids.join(", ")+'</div>');
		modal.find('.modal-body input').val( userids.join(","))
		}else{
			modal.find('.modal-body #pesan').html('Silahkan ceklis terlebih dahulu data yang ingin dihapus');
		}
		
		
	});
	
})
</script>
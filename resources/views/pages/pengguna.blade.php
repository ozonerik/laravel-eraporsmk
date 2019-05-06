@extends('layout.table')
@section('title','Konfigurasi | Pengguna')
@section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pengguna
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Konfigurasi</a></li>
        <li class="active"><a href="{{ url('/pengguna') }}">Pengguna</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
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
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Pengguna</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="box box-info">
            <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Pengguna</h3>
			  <form method="post">
			  @csrf
			  @method('DELETE')
			  <button type="button" class="btn-sm btn-success fa fa-plus pull-right"> Tambah</button>
			  <button formaction="{{ url('pengguna/del/all') }}" type="submit" class="btn-sm btn-danger fa fa-trash pull-right"> Hapus Terpilih</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="table" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
				  <th width="5%"><input type="checkbox" class="selectall minimal-red"></th>
				  <th width="5%">No</th>
                  <th width="15%">Username</th>
                  <th width="23%">Nama</th>
                  <th width="10%">Type User</th>
                  <th width="25%">Email</th>
				  <th width="17%">Opsi</th>
                </tr>
                </thead>
                <tbody>
				@if($pengguna->count())
				@foreach($pengguna as $no => $pengguna)
                <tr id="tr_{{$pengguna->id}}">
					<td><input type="checkbox" name="ids[]" class="selectbox minimal-red" value="{{ $pengguna->id }}"></td>
					<td>{{ ++$no }}</td>
                    <td>{{ $pengguna->username }}</td>
                    <td>{{ $pengguna->name }}</td>
					<td>{{ $pengguna->users_usertypes->group_user }}</td>
					<td>{{ $pengguna->email }}</td>
                    <td>
					<button type="button" class="btn-sm btn-warning fa fa-edit">Edit</button>
					<button type="button" class="btn-sm btn-danger fa fa-remove"
					data-toggle="modal" data-target="#modal-default"
					> Hapus</button>		
					</td>
                </tr>
                @endforeach
				@endif
                </tbody>
                <tfoot>
                <tr>
				  <th width="5%"><input type="checkbox" class="selectall2 minimal-red"></th>
				  <th>No</th>
                  <th>Username</th>
                  <th>Nama</th>
                  <th>Type User</th>
                  <th>Email</th>
				  <th>Opsi</th>
                </tr>
                </tfoot>
              </table>	
</form>			  
		<div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Konfirmasi</h4>
              </div>
              <div class="modal-body">
                <p>Apakah anda yakin ingin menghapus data tersebut</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left fa fa-undo" data-dismiss="modal"> Close</button>
				<a href="{{ url('pengguna/del',$pengguna->id ) }}">
				<button type="buttom" class="btn btn-danger fa fa-trash"> Delete</button>
				</a>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
@endsection
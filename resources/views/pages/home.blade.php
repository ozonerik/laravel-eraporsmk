@extends('layout.home')
@section('title','Home')
@section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Home
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Release Changelogs Versi 1.0.0</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
		  <ul>
		  <li class="fa fa-check"> Sistem Otentikasi Login dan Register</li><br>
		  <li class="fa fa-check"> Fungsi Hak Akses Halaman</li><br>
		  <li class="fa fa-check"> CRUD (Create, Update, Delete)</li><br>
		  <li class="fa fa-check"> Fungsi Multi Delete dengan Checkbox</li><br>
		  <li class="fa fa-check"> Fungsi Delete dengan Modal Dialog</li><br>
		  <li class="fa fa-check"> Fungsi Ekspor PDF (Paper Size: Folio)</li><br>
		  <li class="fa fa-check"> Search dan Pagination</li><br>
		  <li class="fa fa-close" style="color:red"> Fungsi Ekspor Excel</li><br>
		  <li class="fa fa-close" style="color:red"> Fungsi Import Excel/CSV</li><br>
		  </ul>  
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
<?php $__env->startSection('title','Sekolah'); ?>
<?php $__env->startSection('content'); ?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Sekolah
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Sekolah</a></li>
        <li class="active">Profile Sekolah</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <table class="table table-bordered table-hover table-striped">
                        <tbody>
							<tr>
							<th colspan="2" style="color:#3c8dbc">PROFILE SEKOLAH</th>
							</tr>
                            <tr>
                                <th width="30%">NSPN</th>
								<td width="70%"><?php echo e($dtsek->npsn); ?></td>
                            </tr>
							<tr>
								<th>Nama Sekolah</th>
							    <td><?php echo e($dtsek->nama_sekolah); ?></td>
							</tr>
                        </tbody>
                    </table>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\erapor\resources\views/pages/backend/sekolah.blade.php ENDPATH**/ ?>
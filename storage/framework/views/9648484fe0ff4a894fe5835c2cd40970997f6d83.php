<?php $__env->startSection('title','Sekolah | Profile Sekolah'); ?>
<?php $__env->startSection('content'); ?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Profile Sekolah
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo e(url('/home')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo e(url('/sekolah')); ?>">Sekolah</a></li>
        <li class="active"><a href="<?php echo e(url('/sekolah')); ?>">Profile Sekolah</a></li>      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
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
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Profile Sekolah</h3>

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
            <!-- form start -->
            <form class="form-horizontal" method="post" action="<?php echo e(url('/sekolah/update/')); ?>">
			  <?php echo e(csrf_field()); ?>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">NPSN</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="npsn" placeholder="NPSN" value="<?php echo e($dtsek->npsn); ?>">
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-sm-2 control-label">NIS/NSS/NDS </label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="nss" placeholder="NIS/NSS/NDS" value="<?php echo e($dtsek->nss); ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Sekolah</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="nama_sekolah" placeholder="Nama Sekolah" value="<?php echo e($dtsek->nama_sekolah); ?>">
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="<?php echo e($dtsek->alamat); ?>">
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-sm-2 control-label">Kelurahan</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="kelurahan" placeholder="Kelurahan" value="<?php echo e($dtsek->kelurahan); ?>">
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-sm-2 control-label">Kecamatan</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="kecamatan" placeholder="Kecamatan" value="<?php echo e($dtsek->kecamatan); ?>">
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-sm-2 control-label">Kota/ Kab</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="kota" placeholder="Kota/ Kab" value="<?php echo e($dtsek->kota); ?>">
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-sm-2 control-label">Kode Pos</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="kodepos" placeholder="Kode Pos" value="<?php echo e($dtsek->kodepos); ?>">
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-sm-2 control-label">Telp</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="telp" placeholder="Telp" value="<?php echo e($dtsek->telp); ?>">
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-sm-2 control-label">Website</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="website" placeholder="Website" value="<?php echo e($dtsek->website); ?>">
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-6">
                    <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo e($dtsek->email); ?>">
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-sm-2 control-label">Provinsi</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="provinsi" placeholder="Provinsi" value="<?php echo e($dtsek->provinsi); ?>">
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-sm-2 control-label">Negara</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="negara" placeholder="Negara" value="<?php echo e($dtsek->negara); ?>">
                  </div>
                </div>		
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-6">
					  <div class="box-footer">
						<div class="col-xs-4">
						<a href="<?php echo e(url('/sekolah')); ?>" class="btn btn-danger btn-block fa fa-undo"> Cancel</a>
						</div>
					    <div class="col-xs-8">
						<button type="submit" class="btn btn-info pull-right fa fa-save"> Simpan</button>
						</div>
					  </div>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->

              <!-- /.box-footer -->
            </form>
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
<?php echo $__env->make('layout.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\erapor\resources\views/pages/edit-sekolah.blade.php ENDPATH**/ ?>
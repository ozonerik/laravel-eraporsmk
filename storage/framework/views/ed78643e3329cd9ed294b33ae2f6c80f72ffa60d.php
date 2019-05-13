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
        <li><a href="#">Sekolah</a></li>
        <li class="active"><a href="<?php echo e(url('/sekolah')); ?>">Profile Sekolah</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
				<?php if(\Session::has('alert')): ?>
                <div class="alert alert-danger alert-dismissible">
			    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <div class="icon fa fa-ban"> <?php echo e(Session::get('alert')); ?></div>
                </div>
				<?php endif; ?>
				<?php if(\Session::has('alert-success')): ?>
                <div class="alert alert-success alert-dismissible">
			    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <div class="icon fa fa-check"> <?php echo e(Session::get('alert-success')); ?></div>
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
            <form class="form-horizontal" action="<?php echo e(route('sekolah.edit',$sekolah->id)); ?>">
			<?php echo method_field('HEAD'); ?>
			<?php echo csrf_field(); ?>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">NPSN</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="npsn" placeholder="NPSN" value="<?php echo e($sekolah->npsn); ?>" disabled>
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-sm-2 control-label">NIS/NSS/NDS </label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="nss" placeholder="NIS/NSS/NDS" value="<?php echo e($sekolah->nss); ?>" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Sekolah</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="nama_sekolah" placeholder="Nama Sekolah" value="<?php echo e($sekolah->nama_sekolah); ?>" disabled>
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="<?php echo e($sekolah->alamat); ?>" disabled>
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-sm-2 control-label">Kelurahan</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="kelurahan" placeholder="Kelurahan" value="<?php echo e($sekolah->kelurahan); ?>" disabled>
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-sm-2 control-label">Kecamatan</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="kecamatan" placeholder="Kecamatan" value="<?php echo e($sekolah->kecamatan); ?>" disabled>
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-sm-2 control-label">Kota/ Kab</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="kota" placeholder="Kota/ Kab" value="<?php echo e($sekolah->kota); ?>" disabled>
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-sm-2 control-label">Kode Pos</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="kodepos" placeholder="Kode Pos" value="<?php echo e($sekolah->kodepos); ?>" disabled>
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-sm-2 control-label">Telp</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="telp" placeholder="Telp" value="<?php echo e($sekolah->telp); ?>" disabled>
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-sm-2 control-label">Website</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="website" placeholder="Website" value="<?php echo e($sekolah->website); ?>" disabled>
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-6">
                    <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo e($sekolah->email); ?>" disabled>
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-sm-2 control-label">Provinsi</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="provinsi" placeholder="Provinsi" value="<?php echo e($sekolah->provinsi); ?>" disabled>
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-sm-2 control-label">Negara</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="negara" placeholder="Negara" value="<?php echo e($sekolah->negara); ?>" disabled>
                  </div>
                </div>		
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-6">
					  <div class="box-footer">
						<button type="submit" class="btn btn-warning pull-right fa fa-edit"> Edit</button>
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
<?php echo $__env->make('layout.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\erapor\resources\views/pages/sekolah/index.blade.php ENDPATH**/ ?>
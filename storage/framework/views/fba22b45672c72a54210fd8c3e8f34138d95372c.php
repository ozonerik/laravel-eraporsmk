<?php $__env->startSection('title','Konfigurasi | Pengguna'); ?>
<?php $__env->startSection('content'); ?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pengguna
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo e(url('/home')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Konfigurasi</a></li>
        <li class="active"><a href="<?php echo e(url('/pengguna')); ?>">Pengguna</a></li>
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
			</div>
			<div>
			<button type="button" class="btn-sm btn-success fa fa-plus pull-right"
			id="tambah_data" data-toggle="modal" data-target="#addModal"> Tambah</button>
			<button type="submit" class="btn-sm btn-danger fa fa-trash pull-right" 
			id="delete_all" data-toggle="modal" data-target="#delallModal" 
			> Hapus Terpilih</button>
			</div>
			<br><br>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="userTable" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
				  <th width="5%"><input type="checkbox" id="check_all" ></th>
				  <th width="5%">No</th>
                  <th width="15%">Username</th>
                  <th width="23%">Nama</th>
                  <th width="10%">Type User</th>
                  <th width="25%">Email</th>
				  <th width="17%">Opsi</th>
                </tr>
                </thead>
                <tbody>
				<?php if($pengguna->count()): ?>
				<?php $__currentLoopData = $pengguna; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $no => $pengguna): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
					<td>
					<input type="checkbox" name="checkId" class="checkbox" 
					value="<?php echo e($pengguna->id); ?>" data-nama="<?php echo e($pengguna->name); ?>"
					>
					</td>
					<td><?php echo e(++$no); ?></td>
                    <td><?php echo e($pengguna->username); ?></td>
                    <td><?php echo e($pengguna->name); ?></td>
					<td><?php echo e($pengguna->users_usertypes->group_user); ?></td>
					<td><?php echo e($pengguna->email); ?></td>
                    <td>	
					<button type="button" class="btn-sm btn-warning fa fa-save"> Edit</button>			
					<button type="button" class="btn-sm btn-danger fa fa-remove" 
					data-toggle="modal" data-target="#delModal" 
					data-userid="<?php echo e($pengguna->id); ?>"
					data-namauser="<?php echo e($pengguna->name); ?>"
					> Hapus</button>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php endif; ?>
                </tbody>
                <tfoot>
                <tr>
				  <th width="5%"><input type="checkbox" id="check_all2" ></th>
				  <th>No</th>
                  <th>Username</th>
                  <th>Nama</th>
                  <th>Type User</th>
                  <th>Email</th>
				  <th>Opsi</th>
                </tr>
                </tfoot>
              </table>
			  <!-- modal konfirmasi delete -->
				<div class="modal fade" id="delModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog"role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title text-center">Delete Confirmation</h4>
					  </div>
					  <form action="<?php echo e(route('pengguna.destroy', 'user_id')); ?>" method="post">
						<?php echo method_field('DELETE'); ?>
						<?php echo csrf_field(); ?>
					  <div class="modal-body">
						<p class="text-center" id="pesan"></p>
						<input type="hidden" name="pengguna_id" id="user_id" value="">
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-default pull-left fa fa-undo" data-dismiss="modal"> No, Cancel</button>
						<button type="submit" class="btn btn-danger fa fa-trash"> Delete</button>
					  </div>
					 </form>
					</div>
					<!-- /.modal-content -->
					</div>
				  <!-- /.modal-dialog -->
				</div>
				<!-- modal konfirmasi delete select-->
				<div class="modal fade" id="delallModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog"role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title text-center">Delete Selected Confirmation</h4>
					  </div>
					  <form action="<?php echo e(route('pengguna.multidel')); ?>" method="post">
						<?php echo method_field('DELETE'); ?>
						<?php echo csrf_field(); ?>
					  <div class="modal-body">
						<p class="text-center" id="pesan"></p>
						<input type="hidden" name="pengguna_id" id="user_id" value="">
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-default pull-left fa fa-undo" data-dismiss="modal"> No, Cancel</button>
						<div id="tombol"></div>
					  </div>
					 </form>
					</div>
					<!-- /.modal-content -->
					</div>
				  <!-- /.modal-dialog -->
				</div>
				<!-- modal konfirmasi add select-->
				<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog"role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title text-center">Tambah data</h4>
					  </div>
					  <form action="<?php echo e(route('pengguna.store')); ?>" method="post">
						<?php echo method_field('POST'); ?>
						<?php echo csrf_field(); ?>
					  <div class="modal-body">
						<p class="text-center" id="pesan"></p>
						  <div class="form-group has-feedback">
							<label>Username</label>
							<input name="username" id="username" type="text" class="form-control" placeholder="Username">
							<span class="glyphicon glyphicon-user form-control-feedback"></span>
						  </div>
							<div class="form-group has-feedback">
							<label>Email</label>
							<input name="email" id="email" type="email" class="form-control" placeholder="E-Mail">
							<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
						  </div>
						  <div class="form-group has-feedback">
							<label>Password</label>
							<input name="password" id="password" type="password" class="form-control" placeholder="Password">
							<span class="glyphicon glyphicon-lock form-control-feedback"></span>
						  </div>
						 <div class="form-group has-feedback">
							<label>Password Confirmation</label>
							<input name="confirmation" id="confirmation" type="password" class="form-control" placeholder="Password confirmation">
							<span class="glyphicon glyphicon-lock form-control-feedback"></span>
						  </div>
						  <div class="form-group has-feedback">
							<label>Name</label>
							<input name="name" id="name" type="text" class="form-control" placeholder="Name">
							<span class="glyphicon glyphicon-user form-control-feedback"></span>
						  </div>
						  <div class="form-group has-feedback">
							<label>User Type</label>
									  <select name="user_type" class="form-control">
										<option selected hidden></option>
										<?php $__currentLoopData = $groupuser; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<option value="<?php echo e($tp->id_usertype); ?>"><?php echo e($tp->group_user); ?></option>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									  </select>
							<span class="form-control-feedback"></span>
						  </div>				
					  </div>
					  <div class="modal-footer">
						<div class="col-xs-8">
						  <button type="button" class="btn btn-default pull-left fa fa-undo" data-dismiss="modal"> No, Cancel</button>
						</div>
						<!-- /.col -->
						<div class="col-xs-4">
						  <button type="submit" class="btn btn-primary btn-block fa fa-save"> Register</button>
						</div>
					  </div>
					 </form>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\erapor\resources\views/pages/pengguna/index.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title','Sekolah | Profile Sekolah'); ?>
<?php $__env->startSection('content'); ?>
<table>
<tr><th id="judul" colspan="6">RAPOR SISWA</th></tr>
<tr><th id="judul" colspan="6">SEKOLAH MENENGAH KEJURUAN</th></tr>
<tr><th id="judul" colspan="6">(SMK)</th></tr>
<tr><th id="pemisah" colspan="6"></th></tr>
<!-- data -->
<tr>
<th>Nama Sekolah</th>
<th>:</th>
<td id="isian" colspan="3"><?php echo e($sekolah->nama_sekolah); ?></td>
</tr>
<tr>
<th>NPSN</th>
<th>:</th>
<td id="isian"><?php echo e($sekolah->npsn); ?></td>
</tr>
<tr>
<th>NIS/NSS/NDS</th>
<th>:</th>
<td id="isian"><?php echo e($sekolah->nss); ?></td>
</tr>
<tr>
<th rowspan="2">Alamat Sekolah</th>
<th rowspan="2">:</th>
<td id="isian"><?php echo e($sekolah->alamat); ?></td>
</tr>
<tr>
<th>Kode Pos</th>
<th>:</th>
<td id="isian">
<?php echo e($sekolah->kodepos); ?>

</td>
<th>Telp</th>
<th>:</th>
<td id="isian">
<?php echo e($sekolah->telp); ?>

</td>
</tr>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.print', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\erapor\resources\views/pages/sekolah/print.blade.php ENDPATH**/ ?>
<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
<?php echo $__env->make('layout.includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

<?php echo $__env->make('layout.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>   

  <!-- =============================================== -->
  <!-- Left side column. contains the sidebar -->
<?php echo $__env->make('layout.includes.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
<?php echo $__env->yieldContent('content'); ?>
  <!-- /.content-wrapper -->

<?php echo $__env->make('layout.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH C:\wamp64\www\erapor\resources\views/layout/guru.blade.php ENDPATH**/ ?>
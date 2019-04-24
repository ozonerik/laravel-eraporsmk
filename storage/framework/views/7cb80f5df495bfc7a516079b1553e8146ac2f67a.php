<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
<?php echo $__env->make('layout.includes.headhome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>   
</head>
<body class="hold-transition login-page">
<?php echo $__env->yieldContent('content'); ?>
<!-- /.login-box -->

<?php echo $__env->make('layout.includes.foothome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
</body>
</html>
<?php /**PATH C:\wamp64\www\erapor\resources\views/layout/register.blade.php ENDPATH**/ ?>
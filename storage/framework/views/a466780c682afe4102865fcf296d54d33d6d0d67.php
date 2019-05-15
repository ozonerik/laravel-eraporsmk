<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
<?php echo $__env->make('layout.includes.head-print', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  
</head>
<body>
<div class="container">
<?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->make('layout.includes.footer-print', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
</div>
</body>
</html>
<?php /**PATH C:\wamp64\www\erapor\resources\views/layout/print.blade.php ENDPATH**/ ?>
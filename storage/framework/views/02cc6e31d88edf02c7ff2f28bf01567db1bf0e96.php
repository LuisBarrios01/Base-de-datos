<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>Eliminatorias Qatar 2021</title>
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('img/apple-icon.png')); ?>">
    <link rel="icon" type="image/png" href="<?php echo e(asset('img/favicon.png')); ?>">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="<?php echo e(asset('css/material-dashboard.css?v=2.1.1')); ?>" rel="stylesheet" />
    </head>
    <body class="<?php echo e($class ?? ''); ?>">
        <?php if(auth()->guard()->check()): ?>
            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                <?php echo csrf_field(); ?>
            </form>
            <?php echo $__env->make('layouts.page_templates.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <?php if(auth()->guard()->guest()): ?>
            <?php echo $__env->make('layouts.page_templates.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
       
        <script src="<?php echo e(asset('js/core/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/core/popper.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/core/bootstrap-material-design.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/plugins/perfect-scrollbar.jquery.min.js')); ?>"></script>
        
        <?php echo $__env->yieldPushContent('js'); ?>
    </body>
</html><?php /**PATH C:\xampp\htdocs\qatar\resources\views/layouts/main.blade.php ENDPATH**/ ?>
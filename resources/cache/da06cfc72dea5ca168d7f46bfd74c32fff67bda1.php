<?php $__env->startSection('title', $title); ?>

<?php $__env->startSection('content'); ?>
    <h1>About</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('sidebar'); ?>
    ##parent-placeholder-19bd1503d9bad449304cc6b4e977b74bac6cc771##

    <a href="tel:546465465">5645654654</a>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('head-scripts'); ?>
    <script src="/js/local.js"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /src/app/resources/views/pages/about.blade.php ENDPATH**/ ?>
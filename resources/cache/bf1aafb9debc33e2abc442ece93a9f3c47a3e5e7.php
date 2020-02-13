<?php $__env->startSection('title', $title); ?>

<?php $__env->startSection('content'); ?>
    <h1>Homepage</h1>
    <p><?php echo e($abc); ?></p>

    <?php if(isset($records)): ?>
        // $records is defined and is not null...
    <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /src/app/resources/views/pages/home.blade.php ENDPATH**/ ?>
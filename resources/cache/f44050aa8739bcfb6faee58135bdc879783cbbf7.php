<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>

    <script src="/js/global.js"></script>
    <?php echo $__env->yieldPushContent('head-scripts'); ?>
</head>
<body>

<header>

</header>

<main>
    <?php echo $__env->yieldContent('content'); ?>

    <aside>
    <?php $__env->startSection('sidebar'); ?>
        This is the master sidebar.
    <?php echo $__env->yieldSection(); ?>
    </aside>
</main>

<footer>

    <?php echo $__env->make('partials.social-networks', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</footer>

</body>
</html><?php /**PATH /src/app/resources/views/index.blade.php ENDPATH**/ ?>
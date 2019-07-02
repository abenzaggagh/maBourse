<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
 

<head>
    <meta charset="utf-8">
    <meta http-eqiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>maBourse</title>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <?php if(request()->session()->get('isConnected') == 'true'): ?>
        <script src="<?php echo e(asset('js/candidature.js')); ?>" defer></script>
    <?php endif; ?>
    
    <link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">


    <link rel="stylesheet" href="<?php echo e(asset('css/bs-stepper.min.css')); ?>">
    <script src="<?php echo e(asset('js/bs-stepper.min.js')); ?>"></script>

</head>

<body class="d-flex flex-column h-100">
    
    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <main id="app" role="main" class="flex-shrink-0 content">
        <div id="page-content">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </main>

    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
</body>

</html>

<?php /**PATH /Users/amine/Developer/Bourse/resources/views/layouts/app.blade.php ENDPATH**/ ?>
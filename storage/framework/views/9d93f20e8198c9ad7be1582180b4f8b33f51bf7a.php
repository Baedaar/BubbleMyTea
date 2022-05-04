<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo e(asset('css/default.css')); ?>" rel = "stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <link href="<?php echo e(asset('css/styles/start/starter.css')); ?>" rel = "stylesheet"/>
    <link href="<?php echo e(asset('css/styles/start/grid.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/styles/start/colors.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/admin.css')); ?>" rel = "stylesheet"/>
    <link href="<?php echo e(asset('css/styles/sidebar.css')); ?>" rel = "stylesheet"/>
    
   
<title>BubbleMyTea</title>
</head>

<body>
    <header>
        <div>
            <img src="/image/logo.png" alt="logo du site" id="logo"/>
            <h1>BubbleMyTea</h1>
        </div>
    </header>

    <main>
        <?php echo $__env->yieldContent('main'); ?>
    </main>


    <footer>
        <p>Company © Qualitea All rights reserved.</p>
    </footer>
</body>


</html><?php /**PATH /Users/bedoscalibros/mybubble/group-970968/bubbleMyTea/resources/views/layout/default.blade.php ENDPATH**/ ?>
<? // ye file issliye vo add aur list wala option hai 

// we use yeild directory to access content of todos.blade

// 


?>

<!DOCTYPE html>
<html lang="en" data-theme="dark">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Arrays</title>

        <link rel="stylesheet" href="<?php echo e(asset('pico.min.css')); ?>">
</head>
<header class="container">
    <nav>
        <h2>To add todos to database </h2>
        <ul>
            <li><a href="<?php echo e(route('todos.index')); ?>">List Todos </a> </li>
            <li><a href="<?php echo e(route('todos.create')); ?>">Add Todos </a> </li>
        </ul>
    </nav>
</header>

<body>
    <main class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

</html><?php /**PATH C:\Users\tanma\Herd\example\resources\views/layouts/layout.blade.php ENDPATH**/ ?>
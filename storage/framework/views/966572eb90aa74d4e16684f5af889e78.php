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
            <li><a href="todos.blade.php">List Todos </a> </li>
            <li><a href="add.blade.php">Add Todos </a> </li>
        </ul>
    </nav>
</header>

<body>
    <main class="container">
        @yeild('content')
    </main>

</html><?php /**PATH C:\Users\tanma\Herd\example\resources\views/layout.blade.php ENDPATH**/ ?>
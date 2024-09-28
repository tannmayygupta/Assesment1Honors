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
        <h3>To add todos to database ---> </h3>
        <ul>
            <li><a href="add.blade.php">Add Todos </a> </li>
        </ul>
    </nav>
</header>

<body>
<main class="container">
<h1> My Todos </h1>

<table>
    <tr>  
        <th> # </th>      
        <th> Title  </th>

        <th> Due Date </th>

        <th> Is Completed  </th>

    </tr>

    

    <?php for($i = 0 ; $i <count($todos) ; $i++): ?>
    <tr>
        <td><?php echo e($i+1); ?></td>
        <td><?php echo e($todos[$i]["description"]); ?></td>

        <td>
            <?php if($todos[$i]["due_date"]): ?>
                <?php echo e(date('jS M Y',strtotime($todos[$i]["due_date"]))); ?>

            <?php else: ?>
                --
            <?php endif; ?>
        </td>

        <td>
            <?php if($todos[$i]["is_completed"]): ?>
                Yes
            <?php else: ?>
                No
            <?php endif; ?>
        </td>

    </tr>
    <?php endfor; ?> 

    
    
</table>
</main>
</body>
</body>
</html>

<?php /**PATH C:\Users\tanma\Herd\example\resources\views/todos.blade.php ENDPATH**/ ?>
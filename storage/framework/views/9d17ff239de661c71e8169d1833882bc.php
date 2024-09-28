

<?php $__env->startSection('content'); ?>
    
<body>
        <form method="post">

            <lable for="title">Title</lable>
            <input type="text" name="title">
            
            <lable for="date">Due Date</lable>
            <input type="date" name="due_date">

            <input type="checkbox" name="is_completed">
            <lable for="is_completed">is_completed</lable>

            
            <input type="submit">

        </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\tanma\Herd\example\resources\views/todos/create.blade.php ENDPATH**/ ?>
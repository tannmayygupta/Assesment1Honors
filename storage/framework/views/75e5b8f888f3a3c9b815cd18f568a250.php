

<?php $__env->startSection('content'); ?>
    
<?php $__env->stopSection(); ?>
<body>
    <header class="container">
        <form method="post">

            <lable for="title">Title</lable>
            <input type="text" name="title">
            
            <lable for="date">Due Date</lable>
            <input type="date" name="due_date">

            <input type="checkbox" name="is_completed">
            <lable for="is_completed">is_completed</lable>

            
            <input type="submit">

        </form>
    </header>
</body>
</html>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\tanma\Herd\example\resources\views/create.blade.php ENDPATH**/ ?>
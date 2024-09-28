


<?php $__env->startSection('content'); ?>

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
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\tanma\Herd\example\resources\views/todos/index.blade.php ENDPATH**/ ?>
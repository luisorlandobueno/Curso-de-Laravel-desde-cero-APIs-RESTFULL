<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>listado de autos</h1>

    <ul>

        <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <li>

            <?php echo e($car->year); ?> <?php echo e($car->make); ?> <?php echo e($car->model); ?> <?php echo e($car->color); ?>





        </li>
            
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




    </ul>
    
</body>
</html><?php /**PATH C:\xampp\htdocs\LARAVEL\proyecto\resources\views/car/index.blade.php ENDPATH**/ ?>
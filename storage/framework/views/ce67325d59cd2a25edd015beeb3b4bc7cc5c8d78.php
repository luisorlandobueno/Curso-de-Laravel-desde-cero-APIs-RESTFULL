<!-- resources/views/cars/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Autos</title>
</head>
<body>
    <h1>Lista de Autos</h1>

    <ul>
        <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($car->year); ?> <?php echo e($car->make); ?> <?php echo e($car->model); ?> - Color: <?php echo e($car->color); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\LARAVEL\proyecto\resources\views/index.blade.php ENDPATH**/ ?>
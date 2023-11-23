

<?php $__env->startSection('title' , 'este es el titulo'); ?>


<h1> hola <?php echo e($name); ?> bienvenido</h1>


<?php $__env->startSection('content'); ?>

tu nombre <?php echo e($name); ?><br>
tu apellido <?php echo e($apellido); ?><br>
tu edad <?php echo e($edad); ?><br>

<?php $__env->startComponent('components.alert' , ['var' => 'mi variable']); ?>

    <?php $__env->slot('title'); ?>

    advertencia

    <?php $__env->endSlot(); ?>


    <p>esto es un mensaje de alerta</p>
    
<?php echo $__env->renderComponent(); ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LARAVEL\proyecto\resources\views/example.blade.php ENDPATH**/ ?>
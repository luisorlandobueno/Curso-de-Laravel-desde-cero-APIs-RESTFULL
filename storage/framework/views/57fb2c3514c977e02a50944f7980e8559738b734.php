

<?php $__env->startSection('title' , 'este es el titulo'); ?>

<?php $__env->startSection('sidebar'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('sidebar'); ?>


        <p>Este es el mensaje desde la vista hija</p>
<?php $__env->stopSection(); ?> 


<?php $__env->startSection('content'); ?>
   <p>este es el contenido de la vista hija</p>
    <hr>


<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.appp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LARAVEL\proyecto\resources\views/child.blade.php ENDPATH**/ ?>
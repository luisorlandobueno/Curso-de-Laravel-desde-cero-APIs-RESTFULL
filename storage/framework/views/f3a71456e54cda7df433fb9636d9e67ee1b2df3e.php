<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mi aplicacion <?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>



<?php $__env->startSection('name'); ?>
    este es el mensje desde el layout
<?php $__env->stopSection(); ?>


<div class ="container">

<?php echo $__env->yieldContent('content'); ?>

</div>

    
</body>
</html><?php /**PATH C:\xampp\htdocs\LARAVEL\proyecto\resources\views/layouts/appp.blade.php ENDPATH**/ ?>
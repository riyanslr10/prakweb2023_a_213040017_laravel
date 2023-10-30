

<?php $__env->startSection('container'); ?>
    <h1>Halaman About</h1>
    <h3><?php echo e($name); ?></h3>
    <p><?php echo e($email); ?></p>
    <img src="img/<?php echo e($image); ?>" alt="<?php echo e($name); ?>" width="200">  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\prakweb2023_a_213040017_laravel\resources\views/about.blade.php ENDPATH**/ ?>
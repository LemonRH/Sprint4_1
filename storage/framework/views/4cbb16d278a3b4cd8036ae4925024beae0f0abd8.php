<?php $__env->startSection('title', 'Bienvenido'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Bienvenido a mi aplicación</h1>
    <p>Esta es la página de inicio de tu aplicación de gestión de equipos y partidos.</p>
    <p>¡Comienza a administrar tus equipos y partidos ahora!</p>
    <a href="<?php echo e(route('equipos.index')); ?>" class="btn">Ver Equipos</a>
    <a href="<?php echo e(route('partidos.index')); ?>" class="btn">Ver Partidos</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp_1\htdocs\Sprint4_1-main\resources\views/welcome.blade.php ENDPATH**/ ?>
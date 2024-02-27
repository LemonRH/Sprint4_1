<?php $__env->startSection('title', 'Crear Equipo'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Crear Equipo</h1>

    <form action="<?php echo e(route('equipos.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="nombre">Nombre del Equipo:</label>
        <input type="text" name="nombre" required>
        <button type="submit">Crear Equipo</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp_1\htdocs\Sprint4_1-develop\resources\views/equipos/create.blade.php ENDPATH**/ ?>
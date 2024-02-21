<?php $__env->startSection('title', 'Lista de Equipos'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Lista de Equipos</h1>

    <ul>
        <?php $__currentLoopData = $equipos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $equipo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($equipo->nombre); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <div>
        <a href="<?php echo e(route('equipos.create')); ?>" class="btn btn-primary">Crear Equipo</a>
        <a href="<?php echo e(route('equipos.editar-formulario')); ?>" class="btn btn-primary">Editar Equipo</a>
        <a href="<?php echo e(route('equipos.eliminar-formulario')); ?>" class="btn btn-danger">Eliminar Equipo</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp_1\htdocs\Sprint4_1-main\resources\views/equipos/index.blade.php ENDPATH**/ ?>
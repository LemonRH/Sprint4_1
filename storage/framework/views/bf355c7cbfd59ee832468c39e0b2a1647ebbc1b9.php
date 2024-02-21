<?php $__env->startSection('title', 'Editar Equipo'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Editar Equipo</h1>

    <form action="<?php echo e(route('equipos.editar')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <label for="equipo_id">Selecciona un equipo:</label>
        <select name="equipo_id" id="equipo_id">
            <?php $__currentLoopData = $equipos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $equipo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($equipo->id); ?>"><?php echo e($equipo->nombre); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>

        <label for="nuevo_nombre">Nuevo Nombre:</label>
        <input type="text" name="nuevo_nombre" id="nuevo_nombre" required>

        <button type="submit">Guardar Cambios</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp_1\htdocs\Sprint4_1-main\resources\views/equipos/formulario_editar.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title', 'Editar Equipo'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Eliminar Equipo</h1>

    <form action="<?php echo e(route('equipos.eliminar')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>

        <label for="equipo_id">Selecciona un equipo:</label>
        <select name="equipo_id" required>
            <?php $__currentLoopData = $equipos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $equipo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($equipo->id); ?>"><?php echo e($equipo->nombre); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>

        <button type="submit">Eliminar Equipo</button>
    </form>

    <a href="<?php echo e(route('equipos.index')); ?>">Cancelar</a>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp_1\htdocs\Sprint4_1-main\resources\views/equipos/formulario_eliminar.blade.php ENDPATH**/ ?>
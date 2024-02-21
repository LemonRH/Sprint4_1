<?php $__env->startSection('title', 'Eliminar Partido'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Eliminar Partido</h1>

    <form action="<?php echo e(route('partidos.eliminar-formulario')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>

        <label for="partido_id">Selecciona un partido:</label>
        <select name="partido_id" required>
            <?php $__currentLoopData = $partidos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($partido->id); ?>">
                    <?php echo e($partido->fecha); ?> - Equipo Local: <?php echo e($partido->equipoLocal->nombre); ?> - Equipo Visitante: <?php echo e($partido->equipoVisitante->nombre); ?>

                </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>

        <button type="submit">Eliminar Partido</button>
    </form>

    <a href="<?php echo e(route('partidos.index')); ?>">Cancelar</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp_1\htdocs\Sprint4_1-main\resources\views/partidos/eliminar-formulario.blade.php ENDPATH**/ ?>
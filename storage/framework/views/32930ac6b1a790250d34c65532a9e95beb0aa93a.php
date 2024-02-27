<?php $__env->startSection('title', 'Editar Partido'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Editar Partido</h1>

    <form action="<?php echo e(route('partidos.update')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div>
            <label for="partido_id">Seleccionar Partido:</label>
            <select name="partido_id" id="partido_id" required>
                <?php $__currentLoopData = $partidos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($partido->id); ?>">
                        <?php echo e($partido->equipoLocal->nombre); ?> vs <?php echo e($partido->equipoVisitante->nombre); ?> - <?php echo e($partido->fecha); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <div>
            <label for="fecha">Fecha:</label>
            <input type="date" name="fecha" id="fecha" value="<?php echo e(old('fecha')); ?>" required>
        </div>

        <div>
            <label for="resultado_local">Resultado Local:</label>
            <input type="number" name="resultado_local" id="resultado_local" value="<?php echo e(old('resultado_local')); ?>">
        </div>

        <div>
            <label for="resultado_visitante">Resultado Visitante:</label>
            <input type="number" name="resultado_visitante" id="resultado_visitante" value="<?php echo e(old('resultado_visitante')); ?>">
        </div>

        <div>
            <label for="equipo_local_id">Equipo Local:</label>
            <select name="equipo_local_id" id="equipo_local_id" required>
                <?php $__currentLoopData = $equipos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $equipo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($equipo->id); ?>"><?php echo e($equipo->nombre); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <div>
            <label for="equipo_visitante_id">Equipo Visitante:</label>
            <select name="equipo_visitante_id" id="equipo_visitante_id" required>
                <?php $__currentLoopData = $equipos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $equipo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($equipo->id); ?>"><?php echo e($equipo->nombre); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <button type="submit">Actualizar Partido</button>
    </form>

    <a href="<?php echo e(route('partidos.index')); ?>">Cancelar</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp_1\htdocs\Sprint4_1-main\resources\views/partidos/editar.blade.php ENDPATH**/ ?>
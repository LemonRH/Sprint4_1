<?php $__env->startSection('title', 'Lista de Partidos'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Lista de Partidos</h1>

    <?php if($partidos->isEmpty()): ?>
        <p>No hay partidos registrados.</p>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Equipo Local</th>
                    <th>Resultado Local</th>
                    <th>Equipo Visitante</th>
                    <th>Resultado Visitante</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $partidos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($partido->fecha); ?></td>
                        <td><?php echo e($partido->equipoLocal->nombre); ?></td>
                        <td><?php echo e($partido->resultado_local); ?></td>
                        <td><?php echo e($partido->equipoVisitante->nombre); ?></td>
                        <td><?php echo e($partido->resultado_visitante); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    <?php endif; ?>

    <a href="<?php echo e(route('partidos.create')); ?>" class="btn">Crear Nuevo Partido</a>
    
    <a href="<?php echo e(route('partidos.edit')); ?>" class="btn">Editar Partido</a>
    
    <a href="<?php echo e(route('partidos.eliminar-formulario')); ?>" class="btn">Eliminar Partido</a>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp_1\htdocs\Sprint4_1-develop\resources\views/partidos/index.blade.php ENDPATH**/ ?>
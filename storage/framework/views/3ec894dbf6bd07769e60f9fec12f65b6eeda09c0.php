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
                    <option value="<?php echo e($partido->id); ?>" 
                        data-local="<?php echo e($partido->equipoLocal->nombre); ?>" 
                        data-visitante="<?php echo e($partido->equipoVisitante->nombre); ?>" 
                        data-fecha="<?php echo e($partido->fecha); ?>"
                        data-resultado-local="<?php echo e($partido->resultado_local); ?>"
                        data-resultado-visitante="<?php echo e($partido->resultado_visitante); ?>">
                        <?php echo e($partido->equipoLocal->nombre); ?> vs <?php echo e($partido->equipoVisitante->nombre); ?> - <?php echo e($partido->fecha); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <div>
            <label for="fecha">Fecha:</label>
            <input type="date" name="fecha" id="fecha" required>
        </div>

        <div>
            <label for="resultado_local">Resultado Local:</label>
            <input type="number" name="resultado_local" id="resultado_local">
        </div>

        <div>
            <label for="resultado_visitante">Resultado Visitante:</label>
            <input type="number" name="resultado_visitante" id="resultado_visitante">
        </div>

        <div>
            <label for="equipo_local">Equipo Local:</label>
            <input type="text" name="equipo_local" id="equipo_local">
        </div>

        <div>
            <label for="equipo_visitante">Equipo Visitante:</label>
            <input type="text" name="equipo_visitante" id="equipo_visitante">
        </div>

        <button type="submit">Actualizar Partido</button>
    </form>

    <a href="<?php echo e(route('partidos.index')); ?>">Cancelar</a>

    <script>
        document.getElementById('partido_id').addEventListener('change', function() {
            var selectedOption = this.options[this.selectedIndex];
            document.getElementById('fecha').value = selectedOption.getAttribute('data-fecha');
            document.getElementById('resultado_local').value = selectedOption.getAttribute('data-resultado-local');
            document.getElementById('resultado_visitante').value = selectedOption.getAttribute('data-resultado-visitante');
            document.getElementById('equipo_local').value = selectedOption.getAttribute('data-local');
            document.getElementById('equipo_visitante').value = selectedOption.getAttribute('data-visitante');
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp_1\htdocs\Sprint4_1-develop\resources\views/partidos/editar.blade.php ENDPATH**/ ?>
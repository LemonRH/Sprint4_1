<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Mi Aplicación'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">
</head>
<body>

    <header>
        <div class="container">
            <h1>Gestor de Equipos y partidos</h1>
            <nav>
                <ul>
                    <li><a href="/">Inicio</a></li>
                    <li><a href="/equipos">Equipos</a></li>
                    <li><a href="/partidos">Partidos</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container">
        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <?php if(session('error')): ?>
            <div class="alert alert-danger">
                <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?>

        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <footer>
        <div class="container">
            
        </div>
    </footer>

</body>
</html>
<?php /**PATH C:\xampp_1\htdocs\Sprint4_1-develop\resources\views/layouts/app.blade.php ENDPATH**/ ?>
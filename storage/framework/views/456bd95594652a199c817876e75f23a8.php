<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Projets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Gestion des Projets</h1>
            <a href="<?php echo e(route('projets.create')); ?>" class="btn btn-primary">Ajouter un projet</a>
        </div>

        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <div class="row">
            <?php $__empty_1 = true; $__currentLoopData = $projets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $projet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="<?php echo e(asset('photos/' . $projet->image)); ?>" class="card-img-top" alt="<?php echo e($projet->titre); ?>" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($projet->titre); ?></h5>
                        <p class="card-text"><?php echo e(Str::limit($projet->description, 100)); ?></p>
                        <div class="mb-2">
                            <?php if($projet->technologie1): ?>
                            <span class="badge bg-secondary me-1"><?php echo e($projet->technologie1); ?></span>
                            <?php endif; ?>
                            <?php if($projet->technologie2): ?>
                            <span class="badge bg-secondary me-1"><?php echo e($projet->technologie2); ?></span>
                            <?php endif; ?>
                            <?php if($projet->technologie3): ?>
                            <span class="badge bg-secondary"><?php echo e($projet->technologie3); ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="d-flex justify-content-between">
                            <a href="<?php echo e(route('projets.show', $projet->id)); ?>" class="btn btn-info btn-sm">Voir</a>
                            <a href="<?php echo e(route('projets.edit', $projet->id)); ?>" class="btn btn-warning btn-sm">Modifier</a>
                            <form action="<?php echo e(route('projets.destroy', $projet->id)); ?>" method="POST" onsubmit="return confirm('Êtes-vous sûr?')">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="col-12">
                <div class="alert alert-info">
                    Aucun projet trouvé. <a href="<?php echo e(route('projets.create')); ?>">Ajoutez votre premier projet</a>.
                </div>
            </div>
            <?php endif; ?>
        </div>

        <div class="mt-4">
            <a href="/" class="btn btn-secondary">Retour au portfolio</a>
            <a href="<?php echo e(route('messages.index')); ?>" class="btn btn-info ms-2">Voir les messages</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH D:\LARAVEL\portfolio\resources\views/projets/index.blade.php ENDPATH**/ ?>
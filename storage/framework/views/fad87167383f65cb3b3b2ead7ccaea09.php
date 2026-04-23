<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un Projet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1>Modifier le Projet: <?php echo e($projet->titre); ?></h1>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(route('projets.update', $projet->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            
                            <?php if($errors->any()): ?>
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($error); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            <?php endif; ?>

                            <div class="mb-3">
                                <label for="titre" class="form-label">Titre du projet</label>
                                <input type="text" class="form-control" id="titre" name="titre" value="<?php echo e(old('titre', $projet->titre)); ?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="4" required><?php echo e(old('description', $projet->description)); ?></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">Nom de l'image (ex: profile1.png)</label>
                                <input type="text" class="form-control" id="image" name="image" value="<?php echo e(old('image', $projet->image)); ?>" required>
                                <small class="form-text text-muted">L'image doit se trouver dans le dossier public/photos</small>
                            </div>

                            <div class="mb-3">
                                <label for="technologie1" class="form-label">Technologie 1</label>
                                <input type="text" class="form-control" id="technologie1" name="technologie1" value="<?php echo e(old('technologie1', $projet->technologie1)); ?>">
                            </div>

                            <div class="mb-3">
                                <label for="technologie2" class="form-label">Technologie 2</label>
                                <input type="text" class="form-control" id="technologie2" name="technologie2" value="<?php echo e(old('technologie2', $projet->technologie2)); ?>">
                            </div>

                            <div class="mb-3">
                                <label for="technologie3" class="form-label">Technologie 3</label>
                                <input type="text" class="form-control" id="technologie3" name="technologie3" value="<?php echo e(old('technologie3', $projet->technologie3)); ?>">
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="<?php echo e(route('projets.index')); ?>" class="btn btn-secondary">Annuler</a>
                                <button type="submit" class="btn btn-primary">Mettre à jour</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH D:\LARAVEL\portfolio\resources\views/projets/edit.blade.php ENDPATH**/ ?>
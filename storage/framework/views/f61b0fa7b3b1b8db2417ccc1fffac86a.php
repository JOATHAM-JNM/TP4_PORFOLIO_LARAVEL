<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages Reçus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Messages Reçus</h1>
            <div>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addMessageModal">
                    Ajouter un message
                </button>
                <a href="<?php echo e(route('projets.index')); ?>" class="btn btn-primary ms-2">Gérer les projets</a>
                <a href="/" class="btn btn-secondary ms-2">Retour au portfolio</a>
            </div>
        </div>

        <!-- Modal Ajout Message -->
        <div class="modal fade" id="addMessageModal" tabindex="-1" aria-labelledby="addMessageModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addMessageModalLabel">Ajouter un nouveau message</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="<?php echo e(route('contact.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="modal-body">
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
                                <label for="new_nom" class="form-label">Nom</label>
                                <input type="text" class="form-control" id="new_nom" name="nom" required>
                            </div>
                            <div class="mb-3">
                                <label for="new_email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="new_email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="new_sujet" class="form-label">Sujet</label>
                                <input type="text" class="form-control" id="new_sujet" name="sujet" required>
                            </div>
                            <div class="mb-3">
                                <label for="new_message" class="form-label">Message</label>
                                <textarea class="form-control" id="new_message" name="message" rows="4" required></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-success">Ajouter le message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <div class="row">
            <?php $__empty_1 = true; $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0"><?php echo e($message->nom); ?></h5>
                        <small class="text-muted"><?php echo e($message->created_at->format('d/m/Y H:i')); ?></small>
                    </div>
                    <div class="card-body">
                        <div class="mb-2">
                            <strong>Email:</strong> <?php echo e($message->email); ?>

                        </div>
                        <div class="mb-2">
                            <strong>Sujet:</strong> <?php echo e($message->sujet); ?>

                        </div>
                        <div class="mb-3">
                            <strong>Message:</strong>
                            <p class="mb-0"><?php echo e($message->message); ?></p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">Reçu le: <?php echo e($message->created_at->format('d/m/Y à H:i')); ?></small>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editModal<?php echo e($message->id); ?>">
                                    Modifier
                                </button>
                                <form action="<?php echo e(route('messages.destroy', $message->id)); ?>" method="POST" style="display: inline;" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce message?')">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-sm btn-outline-danger">Supprimer</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Modification -->
                    <div class="modal fade" id="editModal<?php echo e($message->id); ?>" tabindex="-1" aria-labelledby="editModalLabel<?php echo e($message->id); ?>" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel<?php echo e($message->id); ?>">Modifier le message</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="<?php echo e(route('messages.update', $message->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="nom_<?php echo e($message->id); ?>" class="form-label">Nom</label>
                                            <input type="text" class="form-control" id="nom_<?php echo e($message->id); ?>" name="nom" value="<?php echo e($message->nom); ?>" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="email_<?php echo e($message->id); ?>" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email_<?php echo e($message->id); ?>" name="email" value="<?php echo e($message->email); ?>" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="sujet_<?php echo e($message->id); ?>" class="form-label">Sujet</label>
                                            <input type="text" class="form-control" id="sujet_<?php echo e($message->id); ?>" name="sujet" value="<?php echo e($message->sujet); ?>" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="message_<?php echo e($message->id); ?>" class="form-label">Message</label>
                                            <textarea class="form-control" id="message_<?php echo e($message->id); ?>" name="message" rows="4" required><?php echo e($message->message); ?></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                        <button type="submit" class="btn btn-primary">Mettre à jour</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="col-12">
                <div class="alert alert-info text-center">
                    <h4>Aucun message reçu</h4>
                    <p>Vous n'avez reçu aucun message pour le moment.</p>
                    <a href="/" class="btn btn-primary">Voir le portfolio</a>
                </div>
            </div>
            <?php endif; ?>
        </div>

        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Statistiques</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="text-center">
                                    <h3 class="text-primary"><?php echo e($messages->count()); ?></h3>
                                    <p>Total des messages</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="text-center">
                                    <h3 class="text-success"><?php echo e($messages->where('created_at', '>=', now()->subDays(7))->count()); ?></h3>
                                    <p>Messages cette semaine</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="text-center">
                                    <h3 class="text-info"><?php echo e($messages->where('created_at', '>=', now()->subDays(30))->count()); ?></h3>
                                    <p>Messages ce mois</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH D:\LARAVEL\portfolio\resources\views/messages/index.blade.php ENDPATH**/ ?>
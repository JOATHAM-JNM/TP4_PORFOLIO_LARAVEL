<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Portfolio </title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
 
    <header class="B">
        <div class="A">
            <div class="logo">
                    <img src="<?php echo e(asset('photos/logo.png')); ?>" alt="Mon Logo" class="D">
                </div>
            <nav class="E">
                <ul class="F">
                    <li><a href="#H" class="G">Accueil</a></li>
                    <li><a href="#S" class="G">Projets</a></li>
                    <li><a href="#AE" class="G">À propos</a></li>
                    <li><a href="#AX" class="G">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>


    <section id="H" class="I">

        <div class="decoration deco1"></div>
        <div class="decoration deco2"></div>
        <div class="decoration deco3"></div>
        <div class="decoration deco4"></div>
        
   
        <div class="etoile etoile1"></div>
        <div class="etoile etoile2"></div>
        <div class="etoile etoile3"></div>
        
        <div class="A">
            <div class="J">
                <div class="K">
                    <h1 class="L"> JE M'APPEL NDUMBA TSHISOLA JOATHAM <br> MAT:2024021019</h1>
                    <p class="M">ETUDIENT DE L'UPL</p>
                    <p class="N">
                        Je crée des sites web modernes et fonctionnels.
                    </p>
                    <div class="O">
                        <a href="#S" class="P bouton-principal">Voir mes projets</a>
                        <a href="#AX" class="P bouton-secondaire">Me contacter</a>
                    </div>
                </div>
                <div class="Q">
                    <img src="<?php echo e(asset('photos/profile.jpg')); ?>" alt="Ma photo" class="R">
                </div>
            </div>
        </div>
    </section>


    <section id="S" class="T">
        <div class="A">
            <h2 class="U">Mes Projets</h2>
            <div class="V">
                <?php $__empty_1 = true; $__currentLoopData = $projets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $projet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="W">
                    <div class="X">
                        <img src="<?php echo e(asset('photos/' . $projet->image)); ?>" alt="<?php echo e($projet->titre); ?>" class="Y">
                    </div>
                    <div class="Z">
                        <h3 class="AA"><?php echo e($projet->titre); ?></h3>
                        <p class="AB">
                            <?php echo e($projet->description); ?>

                        </p>
                        <div class="AC">
                            <?php if($projet->technologie1): ?>
                            <span class="AD"><?php echo e($projet->technologie1); ?></span>
                            <?php endif; ?>
                            <?php if($projet->technologie2): ?>
                            <span class="AD"><?php echo e($projet->technologie2); ?></span>
                            <?php endif; ?>
                            <?php if($projet->technologie3): ?>
                            <span class="AD"><?php echo e($projet->technologie3); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p>Aucun projet à afficher pour le moment.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

  
    <section id="AE" class="AF">
        <div class="A">
            <h2 class="U">À propos de moi</h2>
            <div class="AG">
                <div class="AH">
                    <p class="AI">
                        Je suis développeur des application desktop 
                    </p>
                    <p class="AJ">
                        J'aime transformer des idées en projets concrets et apprendre 
                        de nouvelles technologies pour améliorer mes compétences.
                    </p>
                    
                    <div class="AK">
                        <h3 class="AL">Mes compétences</h3>
                        <div class="AM">
                            <div class="AN">
                                <span class="AO">Java</span>
                                <div class="AP">
                                    <div class="AQ" style="width: 90%"></div>
                                </div>
                            </div>
                            <div class="AN">
                                <span class="AO">Python</span>
                                <div class="AP">
                                    <div class="AQ" style="width: 90%"></div>
                                </div>
                            </div>
                            <div class="AN">
                                <span class="AO">C++</span>
                                <div class="AP">
                                    <div class="AQ" style="width: 90%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="AR">
                    <div class="AS">
                        <h3 class="AT">Informations</h3>
                        <div class="AU">
                            <span class="AV">Nom:</span>
                            <span class="AW">NDUMBA TSHISOLA JOATHAM</span>
                        </div>
                        <div class="AU">
                            <span class="AV">Email:</span>
                            <span class="AW">ndhumbajoatham78@gmail.com</span>
                        </div>
                        <div class="AU">
                            <span class="AV">Ville:</span>
                            <span class="AW">LUBUMBASHI</span>
                        </div>
                        <div class="AU">
                            <span class="AV">Statut:</span>
                            <span class="AW">Disponible</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Contact -->
    <section id="AX" class="AY">
        <div class="A">
            <h2 class="U">Contact</h2>
            <div class="AZ">
                <div class="BA">
                    <h3 class="BB">Parlons de votre projet</h3>
                    <p class="BC">
                        N'hésitez pas à me contacter pour discuter de vos idées.
                    </p>
                    <div class="BD">
                        <p><strong>Email:</strong> ndhumbajoatham78@gmail.com</p>
                        <p><strong>Téléphone:</strong> +243 975883358</p>
                        <p><strong>Ville:</strong> LUBUMBASHI</p>
                    </div>
                </div>
                
                <!-- Messages Flash -->
                    <?php if(session('success')): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert" style="background-color: #d4edda; border-color: #c3e6cb; color: #155724; padding: 15px; margin-bottom: 20px; border-radius: 5px;">
                            <strong>Succès !</strong> <?php echo e(session('success')); ?>

                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>
                    
                    <?php if(session('error')): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert" style="background-color: #f8d7da; border-color: #f5c6cb; color: #721c24; padding: 15px; margin-bottom: 20px; border-radius: 5px;">
                            <strong>Erreur !</strong> <?php echo e(session('error')); ?>

                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>
                    
                    <?php if($errors->any()): ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert" style="background-color: #fff3cd; border-color: #ffeaa7; color: #856404; padding: 15px; margin-bottom: 20px; border-radius: 5px;">
                            <strong>Validation !</strong> Veuillez corriger les erreurs suivantes :
                            <ul style="margin: 10px 0 0 20px;">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <!-- Bouton pour ouvrir le modal d'ajout de message -->
                    <button type="button" class="P bouton-principal" data-bs-toggle="modal" data-bs-target="#addMessageModalPortfolio">
                        ENVOYER UN MESSAGE
                    </button>
                </div>

                <!-- Modal Ajout Message (même que la page des messages) -->
                <div class="modal fade" id="addMessageModalPortfolio" tabindex="-1" aria-labelledby="addMessageModalPortfolioLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addMessageModalPortfolioLabel">Envoyer un message</h5>
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
                                        <label for="portfolio_nom" class="form-label">Nom</label>
                                        <input type="text" class="form-control" id="portfolio_nom" name="nom" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="portfolio_email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="portfolio_email" name="email" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="portfolio_sujet" class="form-label">Sujet</label>
                                        <input type="text" class="form-control" id="portfolio_sujet" name="sujet" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="portfolio_message" class="form-label">Message</label>
                                        <textarea class="form-control" id="portfolio_message" name="message" rows="4" required></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                    <button type="submit" class="btn btn-success">Envoyer le message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  
    <footer class="BG">
        <div class="A">
            <div class="BH">
                <p class="BI">&copy; 2026 joatham ndhumba</p>
                <div class="BJ">
                    <a href="<?php echo e(route('messages.index')); ?>" class="BK">Messages</a>
                    <a href="<?php echo e(route('projets.index')); ?>" class="BK">Admin Projets</a>
                    <a href="#" class="BK">GitHub</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="<?php echo e(asset('js/script.js')); ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH D:\LARAVEL\portfolio\resources\views/portfolio/index.blade.php ENDPATH**/ ?>
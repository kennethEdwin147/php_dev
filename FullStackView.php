<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Favicon -->
  <!-- <link rel="shortcut icon" href="./assets/images/favicon.ico" type="image/x-icon" /> -->

  <!-- Libs CSS -->
  <link rel="stylesheet" href="./assets/css/libs.bundle.css" />

  <!-- Main CSS -->
  <link rel="stylesheet" href="./assets/css/index.bundle.css" />

  <!-- MicroModal CSS -->
  <style>
    .modal {
      display: none;
    }

    .modal.is-open {
      display: block;
    }

    .modal__overlay {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(0,0,0,0.6);
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 1000;
    }

    .modal__container {
      background-color: #fff;
      padding: 30px;
      max-width: 500px;
      max-height: 100vh;
      border-radius: 10px;
      overflow-y: auto;
      box-sizing: border-box;
      position: relative;
    }

    .modal__close {
      background: transparent;
      border: 0;
      position: absolute;
      top: 15px;
      right: 15px;
      font-size: 24px;
      cursor: pointer;
      color: #aaa;
    }

    .modal__close:hover {
      color: #000;
    }
  </style>

  <!-- Title -->
  <title>Développeur Full-Stack | Solutions Logicielles Complètes & Abordables</title>
</head>

<body>

  <!-- navbar -->
  <nav id="mainNav" class="navbar navbar-expand-lg navbar-sticky navbar-light">
    <div class="container">
      <a href="#" class="navbar-brand">Développeur Full-Stack</a>

      <!-- secondary -->
      <ul class="navbar-nav navbar-nav-secondary order-lg-3">
        <li class="nav-item d-lg-none">
          <a class="nav-link nav-icon" href="" role="button" data-bs-toggle="collapse" data-bs-target="#navbar"
            aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="bi bi-list"></span>
          </a>
        </li>
        <li class="nav-item d-none d-lg-block">
          <button type="button" class="btn btn-outline-black rounded-pill ms-2" data-micromodal-trigger="modal-devis">
            Demander un Devis
          </button>
        </li>
      </ul>

      <!-- primary -->
      <div class="collapse navbar-collapse" id="navbar" data-bs-parent="#mainNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#expertise">Expertise</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#qualite">Qualité</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#approche">Mon Approche</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
      </div>

      <!-- mobile user menu -->

    </div>
  </nav>

  <!-- hero -->
  <section class="overflow-hidden">
    <div class="container d-flex flex-column py-20 min-vh-100 level-3">
      <div class="row align-items-center justify-content-center justify-content-lg-between my-auto">
        <div class="col-md-8 col-lg-5 order-lg-2 mb-5 mb-lg-0" data-aos="fade-up">
          <img src="./assets/images/svg/graphic-1.svg" class="img-fluid" alt="Illustration">
        </div>
        <div class="col-md-10 col-lg-6 col-xl-5 text-center text-lg-start order-lg-1">
          <h1>Votre Partenaire en Développement Logiciel : Expertise Full-Stack, Qualité & Solutions Abordables</h1>
          <p class="lead text-secondary mb-5">Développeur passionné et expérimenté, je transforme vos idées en solutions numériques performantes, fiables et à un prix compétitif. Que vous cherchiez à bâtir une nouvelle application web, optimiser une plateforme existante ou intégrer des technologies de pointe, mon expertise polyvalente est à votre service.</p>
          <div class="row align-items-center g-3">
            <div class="col-md-auto">
              <button type="button" class="btn btn-primary btn-with-icon rounded-pill btn-lg" data-micromodal-trigger="modal-devis">Demander un Devis Gratuit <i
                      class="bi bi-arrow-right"></i></button>
            </div>
            <div class="col text-md-start">
              <p class="text-primary">
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <figure class="background">
      <svg width="100%" height="100%" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle data-aos="fade-up" data-aos-delay="200" cx="120%" cy="-40%" r="50%" stroke="#dddddd" stroke-opacity="1"
                data-center-top="@r: 50%;" data-top-bottom="@r: 70%;" />
        <circle data-aos="fade-up" data-aos-delay="400" cx="85%" cy="125%" r="75%" stroke="#dddddd" stroke-opacity="1"
                data-center-top="@r: 75%;" data-top-bottom="@r: 95%;" />
        <circle data-aos="fade-up" data-aos-delay="600" cx="-25%" cy="125%" r="50%" stroke="#dddddd" stroke-opacity="1"
                data-center-top="@cx: -25%;" data-top-bottom="@cx: 45%;" />
      </svg>
    </figure>
  </section>

  <!-- Expertise Technique -->
  <section id="expertise" class="py-15 py-xl-20">
    <div class="container">
      <div class="row justify-content-center mb-10">
        <div class="col-lg-8 text-center">
          <h2 class="fw-light">Mon <span class="fw-bold">Expertise Technique</span></h2>
          <p class="lead text-secondary">Fort d'une solide expérience dans le développement logiciel, je maîtrise un éventail de technologies clés me permettant d'intervenir sur l'ensemble de la chaîne de valeur de vos projets.</p>
        </div>
      </div>
      <div class="row g-3 g-xl-5">
        <div class="col-lg-6" data-aos="fade-up">
          <div class="card bg-opaque-green">
            <div class="card-header">
              <i class="bi bi-code-slash fs-2 text-green"></i>
            </div>
            <div class="card-footer">
              <h3 class="fs-5 text-green">Développement Back-End Robuste et Sécurisé</h3>
              <p class="text-secondary">Maîtrise approfondie de PHP, avec une expertise particulière sur les frameworks modernes comme Laravel et Symfony. Conception et développement d'applications d'entreprise avec .NET (C#). Développement web avec Python (Django et Flask).</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <div class="card bg-opaque-green">
            <div class="card-header">
              <i class="bi bi-window fs-2 text-green"></i>
            </div>
            <div class="card-footer">
              <h3 class="fs-5 text-green">Développement Front-End Dynamique et Intuitif</h3>
              <p class="text-secondary">Construction d'interfaces utilisateur modernes et réactives avec JavaScript et ses frameworks de pointe : React, Angular ou Vue.js. Maîtrise de HTML5, CSS3 (avec des préprocesseurs comme Sass/Less) pour un rendu impeccable sur tous les appareils.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row g-3 g-xl-5 mt-3">
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <div class="card bg-opaque-green">
            <div class="card-header">
              <i class="bi bi-database fs-2 text-green"></i>
            </div>
            <div class="card-footer">
              <h3 class="fs-5 text-green">Bases de Données & Gestion de Données</h3>
              <p class="text-secondary">Conception et optimisation de bases de données relationnelles (MySQL, PostgreSQL, SQL Server) et NoSQL (MongoDB, Redis) pour une gestion efficace et sécurisée de vos données.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
          <div class="card bg-opaque-green">
            <div class="card-header">
              <i class="bi bi-cloud fs-2 text-green"></i>
            </div>
            <div class="card-footer">
              <h3 class="fs-5 text-green">Cloud & DevOps</h3>
              <p class="text-secondary">Familiarisé avec les principes du Cloud Computing (AWS, Azure, Google Cloud) et les pratiques DevOps (Docker, Kubernetes, CI/CD) pour des déploiements fluides, une scalabilité accrue et une gestion d'infrastructure moderne.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Qualité -->
  <section id="qualite" class="py-15 py-xl-20 border-top">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="col-lg-6 inverted" data-aos="fade-up">
          <div class="browser bg-black">
            <img src="./assets/images/pages/shop.jpg" class="img-fluid" alt="Image">
            <span></span>
          </div>
        </div>
        <div class="col-lg-5">
          <h2 class="mb-4">Mon Engagement pour la Qualité</h2>
          <p class="lead text-secondary mb-4">Ce qui me distingue est mon approche rigoureuse axée sur la qualité logicielle. Je ne livre pas seulement du code qui fonctionne, mais du code testé, robuste et maintenable.</p>
          <ul class="list-group list-group-separated">
            <li class="list-group-item">
              <p class="text-muted lead"><span class="text-black">Tests Unitaires</span> pour valider le comportement de chaque composant de l'application.</p>
            </li>
            <li class="list-group-item py-4 mt-4">
              <p class="text-muted lead"><span class="text-black">Tests d'Intégration</span> pour assurer que les différents modules interagissent correctement.</p>
            </li>
            <li class="list-group-item py-4 mt-4">
              <p class="text-muted lead"><span class="text-black">Tests Fonctionnels et UI</span> pour simuler le parcours utilisateur et valider l'expérience utilisateur.</p>
            </li>
            <li class="list-group-item py-4 mt-4">
              <p class="text-muted lead"><span class="text-black">Revue de Code et Bonnes Pratiques</span> pour garantir la meilleure qualité possible et la maintenabilité à long terme.</p>
            </li>
            <li class="list-group-item py-4 mt-4">
              <p class="text-muted lead"><span class="text-black">Sécurité et Performance</span> pour des applications robustes et fiables.</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Mon Approche -->
  <section id="approche" class="pb-15 pb-xl-20">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="col-lg-5">
          <h2>Mon Approche</h2>
          <p class="lead text-secondary mb-4">Je crois fermement qu'un projet réussi repose sur une collaboration transparente, un engagement envers l'excellence et une gestion budgétaire intelligente.</p>
          <ul class="list-group list-group-minimal">
            <li class="list-group-item d-flex align-items-center">
              <div class="icon-box icon-box-sm bg-opaque-green rounded-circle me-2"><i
                  class="bi bi-check2 text-green"></i>
              </div>
              Compréhension Approfondie de vos besoins
            </li>
            <li class="list-group-item d-flex align-items-center">
              <div class="icon-box icon-box-sm bg-opaque-green rounded-circle me-2"><i
                  class="bi bi-check2 text-green"></i>
              </div>
              Méthodologies Agiles (Scrum, Kanban)
            </li>
            <li class="list-group-item d-flex align-items-center">
              <div class="icon-box icon-box-sm bg-opaque-green rounded-circle me-2"><i
                  class="bi bi-check2 text-green"></i>
              </div>
              Communication Claire et régulière
            </li>
            <li class="list-group-item d-flex align-items-center">
              <div class="icon-box icon-box-sm bg-opaque-green rounded-circle me-2"><i
                  class="bi bi-check2 text-green"></i>
              </div>
              Solutions Coût-Efficaces
            </li>
          </ul>
        </div>
        <div class="col-lg-6" data-aos="fade-up">
          <div class="browser bg-white shadow-lg">
            <img src="./assets/images/pages/event.jpg" class="img-fluid" alt="Image">
            <span></span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services -->
  <section id="services" class="py-15 py-xl-20 border-bottom">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-12 text-center">
          <h2>Services que Je Propose</h2>
          <p class="lead text-secondary">Que vous soyez une startup à Montréal à la recherche d'un développeur polyvalent, une PME souhaitant moderniser son système, ou une grande entreprise ayant besoin d'un renfort technique, je suis ouvert à diverses opportunités.</p>
        </div>
      </div>
      <div class="row g-4 g-lg-5 justify-content-center">
        <div class="col-md-6 col-lg-4">
          <div class="card bg-opaque-green">
            <div class="card-body">
              <div class="icon-box icon-box-lg bg-opaque-green rounded-circle mb-3">
                <i class="bi bi-code-slash text-green fs-3"></i>
              </div>
              <h5>Contrats de Développement Freelance / Pigiste</h5>
              <p class="text-secondary">Pour vos projets ponctuels, mandats spécifiques ou besoins de renfort temporaire.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card bg-opaque-green">
            <div class="card-body">
              <div class="icon-box icon-box-lg bg-opaque-green rounded-circle mb-3">
                <i class="bi bi-briefcase text-green fs-3"></i>
              </div>
              <h5>Postes Permanents</h5>
              <p class="text-secondary">Recherche d'opportunités au sein d'équipes dynamiques où je pourrai apporter mon expertise et continuer à évoluer.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card bg-opaque-green">
            <div class="card-body">
              <div class="icon-box icon-box-lg bg-opaque-green rounded-circle mb-3">
                <i class="bi bi-window text-green fs-3"></i>
              </div>
              <h5>Développement Web Personnalisé</h5>
              <p class="text-secondary">Création de sites web, applications web, e-commerce sur mesure.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card bg-opaque-green">
            <div class="card-body">
              <div class="icon-box icon-box-lg bg-opaque-green rounded-circle mb-3">
                <i class="bi bi-gear text-green fs-3"></i>
              </div>
              <h5>Maintenance et Évolution</h5>
              <p class="text-secondary">Optimisation, refactoring et ajout de nouvelles fonctionnalités à vos plateformes existantes.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card bg-opaque-green">
            <div class="card-body">
              <div class="icon-box icon-box-lg bg-opaque-green rounded-circle mb-3">
                <i class="bi bi-diagram-3 text-green fs-3"></i>
              </div>
              <h5>Intégration d'APIs et Services Tiers</h5>
              <p class="text-secondary">Connectivité de vos systèmes avec des services externes pour étendre leurs fonctionnalités.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card bg-opaque-green">
            <div class="card-body">
              <div class="icon-box icon-box-lg bg-opaque-green rounded-circle mb-3">
                <i class="bi bi-lightbulb text-green fs-3"></i>
              </div>
              <h5>Conseil Technique</h5>
              <p class="text-secondary">Accompagnement et recommandations pour vos choix technologiques et stratégies de développement.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- contact -->
  <section id="contact" class="py-15 py-xl-20">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-xl-6">
          <h2 class="fw-bold mb-6">Discutons de Votre Projet</h2>
          <p class="lead text-secondary mb-4">Prêt à discuter de votre prochain projet ou d'une opportunité d'emploi à Montréal ?</p>
          <p class="text-primary mb-4">Pour me texter: <span class="fw-bold">438-725-1915</span> ou m'écrire: <span class="fw-bold">edwingbeti@gmail.com</span></p>

          <?php if (!empty($success_message)): ?>
            <div class="alert alert-success" role="alert">
              <i class="bi bi-check-circle me-2"></i><?php echo $success_message; ?>
            </div>
          <?php endif; ?>

          <?php if (!empty($error_message)): ?>
            <div class="alert alert-danger" role="alert">
              <i class="bi bi-exclamation-triangle me-2"></i><?php echo $error_message; ?>
            </div>
          <?php endif; ?>

          <form method="POST" action="/contact">
            <div class="row g-3">
              <div class="col-md-6">
                <label for="name" class="form-label">Nom, Prénom <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Votre nom et prénom" value="<?php echo htmlspecialchars($form_data['name']); ?>" required>
              </div>
              <div class="col-md-6">
                <label for="company" class="form-label">Nom de l'entreprise Ou individu(e)</label>
                <input type="text" class="form-control" id="company" name="company" placeholder="Votre entreprise" value="<?php echo htmlspecialchars($form_data['company']); ?>">
              </div>
              <div class="col-md-6">
                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Votre email" value="<?php echo htmlspecialchars($form_data['email']); ?>" required>
              </div>
              <div class="col-md-6">
                <label for="phone" class="form-label">Téléphone (optionnel)</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Votre téléphone" value="<?php echo htmlspecialchars($form_data['phone']); ?>">
              </div>
              <div class="col-md-12">
                <label for="project_type" class="form-label">Type de besoin <span class="text-danger">*</span></label>
                <select class="form-select" id="project_type" name="project_type" required>
                  <option value="">Sélectionnez le type de projet</option>
                  <option value="development" <?php echo ($form_data['project_type'] === 'development') ? 'selected' : ''; ?>>Développement</option>
                  <option value="maintenance" <?php echo ($form_data['project_type'] === 'maintenance') ? 'selected' : ''; ?>>Maintenance</option>
                  <option value="consulting" <?php echo ($form_data['project_type'] === 'consulting') ? 'selected' : ''; ?>>Conseil</option>
                  <option value="other" <?php echo ($form_data['project_type'] === 'other') ? 'selected' : ''; ?>>Autre</option>
                </select>
              </div>
              <div class="col-md-12">
                <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
                <textarea class="form-control" id="message" name="message" rows="3" placeholder="Décrivez votre projet" required><?php echo htmlspecialchars($form_data['message']); ?></textarea>
              </div>
              <div class="col-md-8 mt-4">
                <button type="submit" class="btn btn-lg btn-green btn-with-icon rounded-pill">Envoyer ma demande <i
                    class="bi bi-arrow-right"></i></button>
              </div>
              <div class="col-md-12 mt-3">
                <p class="text-muted small">Tel: 438-725-1915 | Email: edwingbeti@gmail.com</p>
                <p class="text-muted small"><span class="text-danger">*</span> Champs obligatoires</p>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- footer -->
  <footer class="py-15 py-xl-20 bg-black inverted">
    <div class="container">
      <div class="row g-4 g-lg-5 mb-10">
        <div class="col-md-3 text-center text-md-start">
          <h4 class="text-white">Développeur Full-Stack</h4>
          <p class="small">Solutions Logicielles Complètes & Abordables</p>
        </div>
        <div class="col-md-4 col-lg-5 text-center text-md-start">
          <h5 class="text-white mb-3">Mes Services</h5>
          <ul class="list-unstyled">
            <li class="mb-1"><a href="#" class="text-reset text-primary-hover">Développement Web Personnalisé</a></li>
            <li class="mb-1"><a href="#" class="text-reset text-primary-hover">Maintenance et Évolution</a></li>
            <li class="mb-1"><a href="#" class="text-reset text-primary-hover">Intégration d'APIs</a></li>
            <li class="mb-1"><a href="#" class="text-reset text-primary-hover">Conseil Technique</a></li>
            <li><a href="#" class="text-reset text-primary-hover">Contrats Freelance & Postes Permanents</a></li>
          </ul>
        </div>
        <div class="col-md-5 col-lg-4">
          <h5 class="text-white mb-3">Mes Coordonnées</h5>
          <ul class="list-unstyled">
            <li class="mb-1"><i class="bi bi-envelope me-2"></i> edwingbeti@gmail.com</li>
            <li class="mb-1"><i class="bi bi-telephone me-2"></i> 438-725-1915</li>
            <li><i class="bi bi-geo-alt me-2"></i> J'habite à Montréal - Disponible en télétravail et en présentiel</li>
          </ul>
        </div>
      </div>
      <div class="row align-items-center g-1 g-lg-6 text-muted">
        <div class="col-md-6 col-lg-5 order-lg-2 text-center text-md-start">
          <ul class="list-inline small">
            <li class="list-inline-item"><a href="https://github.com/" target="_blank" class="text-reset text-primary-hover"><i class="bi bi-github me-1"></i>GitHub</a></li>
            <li class="list-inline-item ms-1"><a href="https://linkedin.com/" target="_blank" class="text-reset text-primary-hover"><i class="bi bi-linkedin me-1"></i>LinkedIn</a></li>
            <li class="list-inline-item ms-1"><a href="https://twitter.com/" target="_blank" class="text-reset text-primary-hover"><i class="bi bi-twitter me-1"></i>Twitter</a></li>
          </ul>
        </div>
        <div class="col-md-6 col-lg-4 text-center text-md-end order-lg-3">
          <span class="small">SIRET: XX XXX XXX XXXXX</span>
        </div>
        <div class="col-lg-3 order-lg-1 text-center text-md-start">
          <p class="small">© 2023 - Tous droits réservés</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Modal Devis -->
  <div class="modal" id="modal-devis" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
      <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-devis-title">
        <button class="modal__close" aria-label="Close modal" data-micromodal-close>&times;</button>
        <header>
        <!--   <h2 id="modal-devis-title" class="text-center mb-4">
            <i class="bi bi-telephone text-primary me-2"></i>
            Contactez-moi directement
          </h2> -->
        </header>
        <main>
          <div class="text-center">
            <div class="mb-4">
              <i class="bi bi-chat-dots fs-1 text-primary mb-3"></i>
              <h4>Pour toutes questions, devis, renseignements ou autre</h4>
            </div>

            <div class="alert alert-primary" role="alert">
              <h5 class="mb-3">
                <i class="bi bi-phone me-2"></i>
                Textez-moi au :
              </h5>
              <h3 class="fw-bold text-primary mb-3">
                <a href="tel:4387251915" class="text-decoration-none">438-725-1915</a>
              </h3>
              <p class="mb-0">Réponse rapide garantie !</p>
            </div>

            <div class="mt-4">
              <p class="text-muted">
                <i class="bi bi-clock me-1"></i>
                Disponible 7j/7 pour vos projets urgents
              </p>
            </div>

            <div class="mt-4">
              <button type="button" class="btn btn-primary btn-lg" data-micromodal-close>
                <i class="bi bi-check-circle me-2"></i>
                Compris !
              </button>
            </div>
          </div>
        </main>
      </div>
    </div>
  </div>

  <!-- javascript -->
  <script src="./assets/js/vendor.bundle.js"></script>
  <script src="./assets/js/index.bundle.js"></script>

  <!-- MicroModal JS -->
<script src="./assets/js/micromodal.min.js"></script>  <script>
    // Initialiser MicroModal
    MicroModal.init({
      onShow: modal => console.info(`${modal.id} is shown`),
      onClose: modal => console.info(`${modal.id} is hidden`),
      openTrigger: 'data-micromodal-trigger',
      closeTrigger: 'data-micromodal-close',
      openClass: 'is-open',
      disableScroll: true,
      disableFocus: false,
      awaitOpenAnimation: false,
      awaitCloseAnimation: false,
      debugMode: true
    });
  </script>
</body>

</html>
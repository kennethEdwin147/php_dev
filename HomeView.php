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
  <title>Développeur PHP Senior | Solutions Web Robustes & Sécurisées</title>
</head>

<body>

  <!-- navbar -->
  <nav id="mainNav" class="navbar navbar-expand-lg navbar-sticky navbar-light">
    <div class="container">
      <a href="#" class="navbar-brand">Développeur PHP Senior</a>

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
            <a class="nav-link" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#clients">Qui J'aide</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#technologies">Technologies</a>
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
          <h1>Votre Expert en Développement PHP pour Startups, Agences & PME</h1>
          <p class="lead text-secondary mb-5">Partenaire technique pour vos projets numériques complexes. Contrats moyen & long terme. Spécialiste Laravel, Symfony & Portails Sécurisés. Disponible en présentiel ou télétravail.</p>
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

  <!-- features -->
  <section id="services" class="py-15 py-xl-20">
    <div class="container">
      <div class="row justify-content-center mb-10">
        <div class="col-lg-6 text-center">
          <h2 class="fw-light">Mes <span class="fw-bold">Services Clés</span></h2>
        </div>
      </div>
      <div class="row g-3 g-xl-5">
        <div class="col-lg-4" data-aos="fade-up">
          <div class="card bg-opaque-green">
            <div class="card-header">
              <i class="bi bi-shield-lock fs-2 text-green"></i>
            </div>
            <div class="card-footer">
              <h3 class="fs-5 text-green">Développement de Portails Sécurisés</h3>
              <p class="text-secondary">Création d'intranets, extranets et plateformes clients avec authentification forte, gestion des accès et cryptage des données sensibles.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="card bg-opaque-green">
            <div class="card-header">
              <i class="bi bi-code-square fs-2 text-green"></i>
            </div>
            <div class="card-footer">
              <h3 class="fs-5 text-green">Applications Web Sur Mesure</h3>
              <p class="text-secondary">Développement de SaaS, marketplaces, outils internes et systèmes de gestion adaptés à vos besoins spécifiques.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="card bg-opaque-green">
            <div class="card-header">
              <i class="bi bi-gear fs-2 text-green"></i>
            </div>
            <div class="card-footer">
              <h3 class="fs-5 text-green">Maintenance & Évolution</h3>
              <p class="text-secondary">Support technique, correction de bugs, mises à jour de sécurité et ajout de nouvelles fonctionnalités pour vos applications existantes.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row g-3 g-xl-5 mt-3">
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
          <div class="card bg-opaque-green">
            <div class="card-header">
              <i class="bi bi-diagram-3 fs-2 text-green"></i>
            </div>
            <div class="card-footer">
              <h3 class="fs-5 text-green">Intégration d'API & Systèmes Tiers</h3>
              <p class="text-secondary">Connexion de votre application à des outils externes (paiement, CRM, ERP, services cloud) pour automatiser vos processus et améliorer l'expérience utilisateur.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
          <div class="card bg-opaque-green">
            <div class="card-header">
              <i class="bi bi-lightbulb fs-2 text-green"></i>
            </div>
            <div class="card-footer">
              <h3 class="fs-5 text-green">Conseil Technique & Architecture Logicielle</h3>
              <p class="text-secondary">Audit de code, optimisation de performance, choix technologiques et planification de roadmap pour startups en phase de scalabilité et PME en transition numérique.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Qui Nous Aidons -->
  <section id="clients" class="py-15 py-xl-20 border-top">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="col-lg-6 inverted" data-aos="fade-up">
          <div class="browser bg-black">
            <img src="./assets/images/pages/shop.jpg" class="img-fluid" alt="Image">
            <span></span>
          </div>
        </div>
        <div class="col-lg-5">
          <h2 class="mb-4">Qui J'aide</h2>
          <ul class="list-group list-group-separated">
            <li class="list-group-item">
              <p class="text-muted lead"><span class="text-black">Startups</span> en quête d'agilité et de solutions techniques évolutives.</p>
            </li>
            <li class="list-group-item py-4 mt-4">
              <p class="text-muted lead"><span class="text-black">Agences Digitales</span> nécessitant un renfort technique pour leurs projets clients.</p>
            </li>
            <li class="list-group-item py-4 mt-4">
              <p class="text-muted lead"><span class="text-black">PME Innovantes</span> cherchant à optimiser leurs processus métier grâce au digital.</p>
            </li>
          </ul>
          <p class="mt-4">Je transforme vos idées en applications web performantes. Que vous soyez une startup en quête d'agilité, une agence nécessitant un renfort technique ou une PME cherchant à optimiser ses processus, je suis votre partenaire privilégié.</p>
          <a href="#contact" class="underline action text-green fs-lg mt-3">Discuter de Mon Projet <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </section>

  <!-- Pourquoi Nous Choisir -->
  <section id="pourquoi" class="pb-15 pb-xl-20">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="col-lg-5">
          <h2>Pourquoi Me Choisir</h2>
          <ul class="list-group list-group-minimal">
            <li class="list-group-item d-flex align-items-center">
              <div class="icon-box icon-box-sm bg-opaque-green rounded-circle me-2"><i
                  class="bi bi-check2 text-green"></i>
              </div>
              Expertise PHP Senior (Laravel, Symfony, Composer, Packagist)
            </li>
            <li class="list-group-item d-flex align-items-center">
              <div class="icon-box icon-box-sm bg-opaque-green rounded-circle me-2"><i
                  class="bi bi-check2 text-green"></i>
              </div>
              Approche Axée sur la Sécurité
            </li>
            <li class="list-group-item d-flex align-items-center">
              <div class="icon-box icon-box-sm bg-opaque-green rounded-circle me-2"><i
                  class="bi bi-check2 text-green"></i>
              </div>
              Engagement Long Terme & Fiabilité
            </li>
            <li class="list-group-item d-flex align-items-center">
              <div class="icon-box icon-box-sm bg-opaque-green rounded-circle me-2"><i
                  class="bi bi-check2 text-green"></i>
              </div>
              Code Propre & Documenté
            </li>
            <li class="list-group-item d-flex align-items-center">
              <div class="icon-box icon-box-sm bg-opaque-green rounded-circle me-2"><i
                  class="bi bi-check2 text-green"></i>
              </div>
              Communication Transparente
            </li>
            <li class="list-group-item d-flex align-items-center">
              <div class="icon-box icon-box-sm bg-opaque-green rounded-circle me-2"><i
                  class="bi bi-check2 text-green"></i>
              </div>
              Agilité & Adaptation aux Besoins
            </li>
            <li class="list-group-item d-flex align-items-center">
              <div class="icon-box icon-box-sm bg-opaque-green rounded-circle me-2"><i
                  class="bi bi-check2 text-green"></i>
              </div>
              Prix Abordable
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

  <!-- Technologies Utilisées -->
  <section id="technologies" class="py-15 py-xl-20 border-bottom">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-12 text-center">
          <h2>Technologies Utilisées</h2>
          <p class="lead text-secondary">J'utilise les technologies modernes de l'écosystème PHP pour garantir des applications performantes et sécurisées.</p>
        </div>
      </div>
      <div class="row g-4 g-lg-5 justify-content-center text-center">
        <div class="col-6 col-md-3">
          <div class="icon-box icon-box-lg bg-opaque-green rounded-circle mb-3 mx-auto">
            <i class="bi bi-code-slash text-green fs-3"></i>
          </div>
          <h5>PHP</h5>
        </div>
        <div class="col-6 col-md-3">
          <div class="icon-box icon-box-lg bg-opaque-green rounded-circle mb-3 mx-auto">
            <i class="bi bi-code-slash text-green fs-3"></i>
          </div>
          <h5>Laravel</h5>
        </div>
        <div class="col-6 col-md-3">
          <div class="icon-box icon-box-lg bg-opaque-green rounded-circle mb-3 mx-auto">
            <i class="bi bi-code-square text-green fs-3"></i>
          </div>
          <h5>Symfony</h5>
        </div>
        <div class="col-6 col-md-3">
          <div class="icon-box icon-box-lg bg-opaque-green rounded-circle mb-3 mx-auto">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128" class="text-green" style="width: 32px; height: 32px;">
              <path fill="currentColor" d="M116.948 97.807c-6.863-.187-12.104.452-16.585 2.341-1.273.537-3.305.552-3.513 2.147.7.733.809 1.829 1.365 2.731 1.07 1.73 2.876 4.052 4.488 5.268 1.762 1.33 3.577 2.751 5.465 3.902 3.358 2.047 7.107 3.217 10.34 5.268 1.906 1.21 3.799 2.733 5.658 4.097.92.675 1.537 1.724 2.732 2.147v-.194c-.628-.8-.79-1.898-1.366-2.733l-2.537-2.537c-2.48-3.292-5.629-6.184-8.976-8.585-2.669-1.916-8.642-4.504-9.755-7.609l-.195-.195c1.892-.214 4.107-.898 5.854-1.367 2.934-.786 5.556-.583 8.585-1.365l4.097-1.171v-.78c-1.531-1.571-2.623-3.651-4.292-5.073-4.37-3.72-9.138-7.437-14.048-10.537-2.724-1.718-6.089-2.835-8.976-4.292-.971-.491-2.677-.746-3.318-1.562-1.517-1.932-2.342-4.382-3.511-6.633-2.449-4.717-4.854-9.868-7.024-14.831-1.48-3.384-2.447-6.72-4.293-9.756-8.86-14.567-18.396-23.358-33.169-32-3.144-1.838-6.929-2.563-10.929-3.513-2.145-.129-4.292-.26-6.438-.391-1.311-.546-2.673-2.149-3.902-2.927C17.811 4.565 5.257-2.16 1.633 6.682c-2.289 5.581 3.421 11.025 5.462 13.854 1.434 1.982 3.269 4.207 4.293 6.438.674 1.467.79 2.938 1.367 4.489 1.417 3.822 2.652 7.98 4.487 11.511.927 1.788 1.949 3.67 3.122 5.268.718.981 1.951 1.413 2.145 2.927-1.204 1.686-1.273 4.304-1.95 6.44-3.05 9.615-1.899 21.567 2.537 28.683 1.36 2.186 4.567 6.871 8.975 5.073 3.856-1.57 2.995-6.438 4.098-10.732.249-.973.096-1.689.585-2.341v.195l3.513 7.024c2.6 4.187 7.212 8.562 11.122 11.514 2.027 1.531 3.623 4.177 6.244 5.073v-.196h-.195c-.508-.791-1.303-1.119-1.951-1.755-1.527-1.497-3.225-3.358-4.487-5.073-3.556-4.827-6.698-10.11-9.561-15.609-1.368-2.627-2.557-5.523-3.709-8.196-.444-1.03-.438-2.589-1.364-3.122-1.263 1.958-3.122 3.542-4.098 5.854-1.561 3.696-1.762 8.204-2.341 12.878-.342.122-.19.038-.391.194-2.718-.655-3.672-3.452-4.683-5.853-2.554-6.07-3.029-15.842-.781-22.829.582-1.809 3.21-7.501 2.146-9.172-.508-1.666-2.184-2.63-3.121-3.903-1.161-1.574-2.319-3.646-3.124-5.464-2.09-4.731-3.066-10.044-5.267-14.828-1.053-2.287-2.832-4.602-4.293-6.634-1.617-2.253-3.429-3.912-4.683-6.635-.446-.968-1.051-2.518-.391-3.513.21-.671.508-.951 1.171-1.17 1.132-.873 4.284.29 5.462.779 3.129 1.3 5.741 2.538 8.392 4.294 1.271.844 2.559 2.475 4.097 2.927h1.756c2.747.631 5.824.195 8.391.975 4.536 1.378 8.601 3.523 12.292 5.854 11.246 7.102 20.442 17.21 26.732 29.269 1.012 1.942 1.45 3.794 2.341 5.854 1.798 4.153 4.063 8.426 5.852 12.488 1.786 4.052 3.526 8.141 6.05 11.513 1.327 1.772 6.451 2.723 8.781 3.708 1.632.689 4.307 1.409 5.854 2.34 2.953 1.782 5.815 3.903 8.586 5.855 1.383.975 5.64 3.116 5.852 4.879zM29.729 23.466c-1.431-.027-2.443.156-3.513.389v.195h.195c.683 1.402 1.888 2.306 2.731 3.513.65 1.367 1.301 2.732 1.952 4.097l.194-.193c1.209-.853 1.762-2.214 1.755-4.294-.484-.509-.555-1.147-.975-1.755-.556-.811-1.635-1.272-2.339-1.952z"/>
            </svg>
          </div>
          <h5>MySQL</h5>
        </div>
        <div class="col-6 col-md-3">
          <div class="icon-box icon-box-lg bg-opaque-green rounded-circle mb-3 mx-auto">
            <i class="bi bi-braces text-green fs-3"></i>
          </div>
          <h5>Vue.js/React</h5>
        </div>
        <div class="col-6 col-md-3">
          <div class="icon-box icon-box-lg bg-opaque-green rounded-circle mb-3 mx-auto">
            <i class="bi bi-box text-green fs-3"></i>
          </div>
          <h5>Docker</h5>
        </div>
        <div class="col-6 col-md-3">
          <div class="icon-box icon-box-lg bg-opaque-green rounded-circle mb-3 mx-auto">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128" class="text-green" style="width: 32px; height: 32px;">
              <path fill="currentColor" d="M124.737 58.378L69.621 3.264c-3.172-3.174-8.32-3.174-11.497 0L46.68 14.71l14.518 14.518c3.375-1.139 7.243-.375 9.932 2.314 2.703 2.706 3.461 6.607 2.294 9.993l13.992 13.993c3.385-1.167 7.292-.413 9.994 2.295 3.78 3.777 3.78 9.9 0 13.679a9.673 9.673 0 01-13.683 0 9.677 9.677 0 01-2.105-10.521L68.574 47.933l-.002 34.341a9.708 9.708 0 012.559 1.828c3.778 3.777 3.778 9.898 0 13.683-3.779 3.777-9.904 3.777-13.679 0-3.778-3.784-3.778-9.905 0-13.683a9.65 9.65 0 013.167-2.11V47.333a9.581 9.581 0 01-3.167-2.111c-2.862-2.86-3.551-7.06-2.083-10.576L41.056 20.333 3.264 58.123a8.133 8.133 0 000 11.5l55.117 55.114c3.174 3.174 8.32 3.174 11.499 0l54.858-54.858a8.135 8.135 0 00-.001-11.501z"/>
            </svg>
          </div>
          <h5>Git</h5>
        </div>
        <div class="col-6 col-md-3">
          <div class="icon-box icon-box-lg bg-opaque-green rounded-circle mb-3 mx-auto">
            <i class="bi bi-box-seam text-green fs-3"></i>
          </div>
          <h5>Composer</h5>
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
          <h4 class="text-white">Développeur PHP Senior</h4>
          <p class="small">Solutions Web Robustes & Sécurisées</p>
        </div>
        <div class="col-md-4 col-lg-5 text-center text-md-start">
          <h5 class="text-white mb-3">Mes Services</h5>
          <ul class="list-unstyled">
            <li class="mb-1"><a href="#" class="text-reset text-primary-hover">Développement de Portails Sécurisés</a></li>
            <li class="mb-1"><a href="#" class="text-reset text-primary-hover">Applications Web Sur Mesure</a></li>
            <li class="mb-1"><a href="#" class="text-reset text-primary-hover">Maintenance & Évolution</a></li>
            <li class="mb-1"><a href="#" class="text-reset text-primary-hover">Intégration d'API</a></li>
            <li><a href="#" class="text-reset text-primary-hover">Conseil Technique</a></li>
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

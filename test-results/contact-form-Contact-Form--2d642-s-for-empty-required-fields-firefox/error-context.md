# Test info

- Name: Contact Form Tests >> should show validation errors for empty required fields
- Location: C:\Users\kenneth\Desktop\agence_web\tests\ui\contact-form.spec.js:23:3

# Error details

```
Error: Timed out 5000ms waiting for expect(locator).toBeVisible()

Locator: locator('.alert-danger')
Expected: visible
Received: <element(s) not found>
Call log:
  - expect.toBeVisible with timeout 5000ms
  - waiting for locator('.alert-danger')

    at C:\Users\kenneth\Desktop\agence_web\tests\ui\contact-form.spec.js:36:49
```

# Page snapshot

```yaml
- navigation:
  - link "Développeur PHP Senior":
    - /url: "#"
  - list:
    - listitem:
      - button "Demander un Devis"
  - list:
    - listitem:
      - link "Accueil":
        - /url: "#"
    - listitem:
      - link "Services":
        - /url: "#services"
    - listitem:
      - link "Qui J'aide":
        - /url: "#clients"
    - listitem:
      - link "Pourquoi Me Choisir":
        - /url: "#pourquoi"
    - listitem:
      - link "Technologies":
        - /url: "#technologies"
    - listitem:
      - link "Contact":
        - /url: "#contact"
- img "Illustration"
- heading "Votre Expert en Développement PHP pour Startups, Agences & PME" [level=1]
- paragraph: Partenaire technique pour vos projets numériques complexes. Contrats moyen & long terme. Spécialiste Laravel, Symfony & Portails Sécurisés. Disponible en présentiel ou télétravail.
- button "Demander un Devis Gratuit "
- paragraph
- figure:
  - img
- heading "Mes Services Clés" [level=2]
- text: 
- heading "Développement de Portails Sécurisés" [level=3]
- paragraph: Création d'intranets, extranets et plateformes clients avec authentification forte, gestion des accès et cryptage des données sensibles.
- text: 
- heading "Applications Web Sur Mesure" [level=3]
- paragraph: Développement de SaaS, marketplaces, outils internes et systèmes de gestion adaptés à vos besoins spécifiques.
- text: 
- heading "Maintenance & Évolution" [level=3]
- paragraph: Support technique, correction de bugs, mises à jour de sécurité et ajout de nouvelles fonctionnalités pour vos applications existantes.
- text: 
- heading "Intégration d'API & Systèmes Tiers" [level=3]
- paragraph: Connexion de votre application à des outils externes (paiement, CRM, ERP, services cloud) pour automatiser vos processus et améliorer l'expérience utilisateur.
- text: 
- heading "Conseil Technique & Architecture Logicielle" [level=3]
- paragraph: Audit de code, optimisation de performance, choix technologiques et planification de roadmap pour startups en phase de scalabilité et PME en transition numérique.
- img "Image"
- heading "Qui J'aide" [level=2]
- list:
  - listitem:
    - paragraph: Startups en quête d'agilité et de solutions techniques évolutives.
  - listitem:
    - paragraph: Agences Digitales nécessitant un renfort technique pour leurs projets clients.
  - listitem:
    - paragraph: PME Innovantes cherchant à optimiser leurs processus métier grâce au digital.
- paragraph: Je transforme vos idées en applications web performantes. Que vous soyez une startup en quête d'agilité, une agence nécessitant un renfort technique ou une PME cherchant à optimiser ses processus, je suis votre partenaire privilégié.
- link "Discuter de Mon Projet ":
  - /url: "#contact"
- heading "Pourquoi Me Choisir" [level=2]
- list:
  - listitem:  Expertise PHP Senior (Laravel, Symfony, Composer, Packagist)
  - listitem:  Approche Axée sur la Sécurité
  - listitem:  Engagement Long Terme & Fiabilité
  - listitem:  Code Propre & Documenté
  - listitem:  Communication Transparente
  - listitem:  Agilité & Adaptation aux Besoins
  - listitem:  Prix Abordable
- img "Image"
- heading "Technologies Utilisées" [level=2]
- paragraph: J'utilise les technologies modernes de l'écosystème PHP pour garantir des applications performantes et sécurisées.
- text: 
- heading "PHP" [level=5]
- text: 
- heading "Laravel" [level=5]
- text: 
- heading "Symfony" [level=5]
- img
- heading "MySQL" [level=5]
- text: 
- heading "Vue.js/React" [level=5]
- text: 
- heading "Docker" [level=5]
- img
- heading "Git" [level=5]
- text: 
- heading "Composer/Packagist" [level=5]
- heading "Discutons de Votre Projet" [level=2]
- paragraph: "Pour me texter: 438-725-1915 ou m'écrire: edwingbeti@gmail.com"
- text: Nom, Prénom *
- textbox "Nom, Prénom *"
- text: Nom de l'entreprise Ou individu(e)
- textbox "Nom de l'entreprise Ou individu(e)"
- text: Email *
- textbox "Email *"
- text: Téléphone (optionnel)
- textbox "Téléphone (optionnel)"
- text: Type de besoin *
- combobox "Type de besoin *":
  - option "Sélectionnez le type de projet" [selected]
  - option "Développement"
  - option "Maintenance"
  - option "Conseil"
  - option "Autre"
- text: Message *
- textbox "Message *"
- button "Envoyer ma demande "
- paragraph: "Tel: 438-725-1915 | Email: edwingbeti@gmail.com"
- paragraph: "* Champs obligatoires"
- contentinfo:
  - heading "Développeur PHP Senior" [level=4]
  - paragraph: Solutions Web Robustes & Sécurisées
  - heading "Mes Services" [level=5]
  - list:
    - listitem:
      - link "Développement de Portails Sécurisés":
        - /url: "#"
    - listitem:
      - link "Applications Web Sur Mesure":
        - /url: "#"
    - listitem:
      - link "Maintenance & Évolution":
        - /url: "#"
    - listitem:
      - link "Intégration d'API":
        - /url: "#"
    - listitem:
      - link "Conseil Technique":
        - /url: "#"
  - heading "Mes Coordonnées" [level=5]
  - list:
    - listitem:  edwingbeti@gmail.com
    - listitem:  438-725-1915
    - listitem:  J'habite à Montréal - Disponible en télétravail et en présentiel
  - list:
    - listitem:
      - link " GitHub":
        - /url: https://github.com/
    - listitem:
      - link " LinkedIn":
        - /url: https://linkedin.com/
    - listitem:
      - link " Twitter":
        - /url: https://twitter.com/
  - text: "SIRET: XX XXX XXX XXXXX"
  - paragraph: © 2023 - Tous droits réservés
```

# Test source

```ts
   1 | const { test, expect } = require('@playwright/test');
   2 |
   3 | test.describe('Contact Form Tests', () => {
   4 |   test('should display contact form with all fields', async ({ page }) => {
   5 |     await page.goto('/');
   6 |     
   7 |     // Aller à la section contact
   8 |     await page.click('a[href="#contact"]');
   9 |     
   10 |     // Vérifier que tous les champs sont présents
   11 |     await expect(page.locator('#name')).toBeVisible();
   12 |     await expect(page.locator('#company')).toBeVisible();
   13 |     await expect(page.locator('#email')).toBeVisible();
   14 |     await expect(page.locator('#phone')).toBeVisible();
   15 |     await expect(page.locator('#project_type')).toBeVisible();
   16 |     await expect(page.locator('#message')).toBeVisible();
   17 |     
   18 |     // Vérifier le bouton de soumission
   19 |     await expect(page.locator('button[type="submit"]')).toBeVisible();
   20 |     await expect(page.locator('button[type="submit"]')).toContainText('Envoyer ma demande');
   21 |   });
   22 |
   23 |   test('should show validation errors for empty required fields', async ({ page }) => {
   24 |     await page.goto('/');
   25 |     
   26 |     // Aller à la section contact
   27 |     await page.click('a[href="#contact"]');
   28 |     
   29 |     // Soumettre le formulaire vide
   30 |     await page.click('button[type="submit"]');
   31 |     
   32 |     // Attendre la réponse et vérifier les erreurs
   33 |     await page.waitForLoadState('networkidle');
   34 |     
   35 |     // Vérifier que les messages d'erreur sont affichés
>  36 |     await expect(page.locator('.alert-danger')).toBeVisible();
      |                                                 ^ Error: Timed out 5000ms waiting for expect(locator).toBeVisible()
   37 |     await expect(page.locator('.alert-danger')).toContainText('Le nom et prénom sont obligatoires');
   38 |     await expect(page.locator('.alert-danger')).toContainText('L\'email est obligatoire');
   39 |     await expect(page.locator('.alert-danger')).toContainText('Le message est obligatoire');
   40 |     await expect(page.locator('.alert-danger')).toContainText('Veuillez sélectionner un type de projet');
   41 |   });
   42 |
   43 |   test('should show validation error for invalid email', async ({ page }) => {
   44 |     await page.goto('/');
   45 |     
   46 |     // Aller à la section contact
   47 |     await page.click('a[href="#contact"]');
   48 |     
   49 |     // Remplir avec un email invalide
   50 |     await page.fill('#name', 'Test User');
   51 |     await page.fill('#email', 'invalid-email');
   52 |     await page.fill('#message', 'Test message');
   53 |     await page.selectOption('#project_type', 'development');
   54 |     
   55 |     // Soumettre le formulaire
   56 |     await page.click('button[type="submit"]');
   57 |     
   58 |     // Attendre la réponse
   59 |     await page.waitForLoadState('networkidle');
   60 |     
   61 |     // Vérifier l'erreur d'email
   62 |     await expect(page.locator('.alert-danger')).toBeVisible();
   63 |     await expect(page.locator('.alert-danger')).toContainText('L\'email n\'est pas valide');
   64 |   });
   65 |
   66 |   test('should submit form with valid data', async ({ page }) => {
   67 |     await page.goto('/');
   68 |     
   69 |     // Aller à la section contact
   70 |     await page.click('a[href="#contact"]');
   71 |     
   72 |     // Remplir le formulaire avec des données valides
   73 |     await page.fill('#name', 'Test User Playwright');
   74 |     await page.fill('#company', 'Test Company');
   75 |     await page.fill('#email', 'test@playwright.com');
   76 |     await page.fill('#phone', '123-456-7890');
   77 |     await page.selectOption('#project_type', 'development');
   78 |     await page.fill('#message', 'Ceci est un message de test automatisé avec Playwright.');
   79 |     
   80 |     // Soumettre le formulaire
   81 |     await page.click('button[type="submit"]');
   82 |     
   83 |     // Attendre la réponse
   84 |     await page.waitForLoadState('networkidle');
   85 |     
   86 |     // Vérifier le résultat (succès ou erreur d'email server)
   87 |     const hasSuccess = await page.locator('.alert-success').isVisible();
   88 |     const hasError = await page.locator('.alert-danger').isVisible();
   89 |     
   90 |     // Au moins un des deux doit être visible
   91 |     expect(hasSuccess || hasError).toBeTruthy();
   92 |     
   93 |     if (hasSuccess) {
   94 |       await expect(page.locator('.alert-success')).toContainText('Votre message a été envoyé avec succès');
   95 |     } else if (hasError) {
   96 |       // Si erreur, ça devrait être liée au serveur mail
   97 |       await expect(page.locator('.alert-danger')).toContainText('Erreur lors de l\'envoi du message');
   98 |     }
   99 |   });
  100 |
  101 |   test('should preserve form data on validation error', async ({ page }) => {
  102 |     await page.goto('/');
  103 |     
  104 |     // Aller à la section contact
  105 |     await page.click('a[href="#contact"]');
  106 |     
  107 |     // Remplir partiellement le formulaire (manquer des champs requis)
  108 |     await page.fill('#name', 'Test User');
  109 |     await page.fill('#company', 'Test Company');
  110 |     await page.fill('#phone', '123-456-7890');
  111 |     // Laisser email et message vides intentionnellement
  112 |     
  113 |     // Soumettre le formulaire
  114 |     await page.click('button[type="submit"]');
  115 |     
  116 |     // Attendre la réponse
  117 |     await page.waitForLoadState('networkidle');
  118 |     
  119 |     // Vérifier que les données saisies sont préservées
  120 |     await expect(page.locator('#name')).toHaveValue('Test User');
  121 |     await expect(page.locator('#company')).toHaveValue('Test Company');
  122 |     await expect(page.locator('#phone')).toHaveValue('123-456-7890');
  123 |     
  124 |     // Vérifier que les champs vides restent vides
  125 |     await expect(page.locator('#email')).toHaveValue('');
  126 |     await expect(page.locator('#message')).toHaveValue('');
  127 |   });
  128 |
  129 |   test('should have all project type options', async ({ page }) => {
  130 |     await page.goto('/');
  131 |     
  132 |     // Aller à la section contact
  133 |     await page.click('a[href="#contact"]');
  134 |     
  135 |     // Vérifier les options du select
  136 |     const options = await page.locator('#project_type option').allTextContents();
```
# Test info

- Name: Navigation Tests >> should navigate to different sections
- Location: C:\Users\kenneth\Desktop\agence_web\tests\ui\navigation.spec.js:15:3

# Error details

```
Error: page.click: Test timeout of 30000ms exceeded.
Call log:
  - waiting for locator('a[href="#clients"]')
    - locator resolved to <a href="#clients" class="nav-link">Qui J'aide</a>
  - attempting click action
    2 × waiting for element to be visible, enabled and stable
      - element is not stable
    - retrying click action
    - waiting 20ms
    2 × waiting for element to be visible, enabled and stable
      - element is visible, enabled and stable
      - scrolling into view if needed
      - done scrolling
      - element is outside of the viewport
    - retrying click action
      - waiting 100ms
    45 × waiting for element to be visible, enabled and stable
       - element is visible, enabled and stable
       - scrolling into view if needed
       - done scrolling
       - element is outside of the viewport
     - retrying click action
       - waiting 500ms

    at C:\Users\kenneth\Desktop\agence_web\tests\ui\navigation.spec.js:24:16
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
   3 | test.describe('Navigation Tests', () => {
   4 |   test('should load homepage successfully', async ({ page }) => {
   5 |     await page.goto('/');
   6 |     
   7 |     // Vérifier le titre de la page
   8 |     await expect(page).toHaveTitle(/Développeur PHP Senior/);
   9 |     
  10 |     // Vérifier les éléments principaux
  11 |     await expect(page.locator('h1')).toContainText('Votre Expert en Développement PHP');
  12 |     await expect(page.locator('.navbar-brand')).toContainText('Développeur PHP Senior');
  13 |   });
  14 |
  15 |   test('should navigate to different sections', async ({ page }) => {
  16 |     await page.goto('/');
  17 |     
  18 |     // Test navigation vers Services
  19 |     await page.click('a[href="#services"]');
  20 |     await expect(page.locator('#services')).toBeInViewport();
  21 |     await expect(page.locator('#services h2')).toContainText('Mes Services Clés');
  22 |     
  23 |     // Test navigation vers Qui J'aide
> 24 |     await page.click('a[href="#clients"]');
     |                ^ Error: page.click: Test timeout of 30000ms exceeded.
  25 |     await expect(page.locator('#clients')).toBeInViewport();
  26 |     await expect(page.locator('#clients h2')).toContainText('Qui J\'aide');
  27 |     
  28 |     // Test navigation vers Pourquoi Me Choisir
  29 |     await page.click('a[href="#pourquoi"]');
  30 |     await expect(page.locator('#pourquoi')).toBeInViewport();
  31 |     await expect(page.locator('#pourquoi h2')).toContainText('Pourquoi Me Choisir');
  32 |     
  33 |     // Test navigation vers Technologies
  34 |     await page.click('a[href="#technologies"]');
  35 |     await expect(page.locator('#technologies')).toBeInViewport();
  36 |     await expect(page.locator('#technologies h2')).toContainText('Technologies Utilisées');
  37 |     
  38 |     // Test navigation vers Contact
  39 |     await page.click('a[href="#contact"]');
  40 |     await expect(page.locator('#contact')).toBeInViewport();
  41 |     await expect(page.locator('#contact h2')).toContainText('Discutons de Votre Projet');
  42 |   });
  43 |
  44 |   test('should display all service cards', async ({ page }) => {
  45 |     await page.goto('/');
  46 |     
  47 |     // Aller à la section services
  48 |     await page.click('a[href="#services"]');
  49 |     
  50 |     // Vérifier que tous les services sont présents
  51 |     const services = [
  52 |       'Développement de Portails Sécurisés',
  53 |       'Applications Web Sur Mesure',
  54 |       'Maintenance & Évolution',
  55 |       'Intégration d\'API & Systèmes Tiers',
  56 |       'Conseil Technique & Architecture Logicielle'
  57 |     ];
  58 |     
  59 |     for (const service of services) {
  60 |       await expect(page.locator('.card-footer h3')).toContainText(service);
  61 |     }
  62 |   });
  63 |
  64 |   test('should display all technologies', async ({ page }) => {
  65 |     await page.goto('/');
  66 |     
  67 |     // Aller à la section technologies
  68 |     await page.click('a[href="#technologies"]');
  69 |     
  70 |     // Vérifier que toutes les technologies sont présentes
  71 |     const technologies = ['PHP', 'Laravel', 'Symfony', 'MySQL', 'Vue.js/React', 'Docker', 'Git', 'Composer/Packagist'];
  72 |     
  73 |     for (const tech of technologies) {
  74 |       await expect(page.locator('#technologies h5')).toContainText(tech);
  75 |     }
  76 |   });
  77 | });
  78 |
```
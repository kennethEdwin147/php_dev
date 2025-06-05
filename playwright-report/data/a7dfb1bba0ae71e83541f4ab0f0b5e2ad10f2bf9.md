# Test info

- Name: Modal Popup Tests >> should close modal when clicking outside (overlay)
- Location: C:\Users\kenneth\Desktop\agence_web\tests\ui\modal.spec.js:63:3

# Error details

```
Error: Timed out 5000ms waiting for expect(locator).not.toBeVisible()

Locator: locator('#modal-devis')
Expected: not visible
Received: visible
Call log:
  - expect.not.toBeVisible with timeout 5000ms
  - waiting for locator('#modal-devis')
    8 × locator resolved to <div id="modal-devis" aria-hidden="false" class="modal is-open">…</div>
      - unexpected value "visible"

    at C:\Users\kenneth\Desktop\agence_web\tests\ui\modal.spec.js:74:52
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
- dialog:
  - button "Close modal": ×
  - banner
  - main:
    - text: 
    - heading "Pour toutes questions, devis, renseignements ou autre" [level=4]
    - alert:
      - heading " Textez-moi au :" [level=5]
      - heading "438-725-1915" [level=3]:
        - link "438-725-1915":
          - /url: tel:4387251915
      - paragraph: Réponse rapide garantie !
    - paragraph:  Disponible 7j/7 pour vos projets urgents
    - button " Compris !"
```

# Test source

```ts
   1 | const { test, expect } = require('@playwright/test');
   2 |
   3 | test.describe('Modal Popup Tests', () => {
   4 |   test('should open modal when clicking "Demander un Devis" in navbar', async ({ page }) => {
   5 |     await page.goto('/');
   6 |     
   7 |     // Vérifier que le modal est initialement caché
   8 |     await expect(page.locator('#modal-devis')).not.toBeVisible();
   9 |     
   10 |     // Cliquer sur le bouton "Demander un Devis" dans la navbar
   11 |     await page.click('button[data-micromodal-trigger="modal-devis"]');
   12 |     
   13 |     // Attendre que le modal soit visible
   14 |     await expect(page.locator('#modal-devis')).toBeVisible();
   15 |     await expect(page.locator('#modal-devis')).toHaveClass(/is-open/);
   16 |     
   17 |     // Vérifier le contenu du modal
   18 |     await expect(page.locator('#modal-devis-title')).toContainText('Contactez-moi directement');
   19 |     await expect(page.locator('#modal-devis')).toContainText('Pour toutes questions, devis, renseignements ou autre');
   20 |     await expect(page.locator('#modal-devis')).toContainText('438-725-1915');
   21 |   });
   22 |
   23 |   test('should open modal when clicking "Demander un Devis Gratuit" in hero section', async ({ page }) => {
   24 |     await page.goto('/');
   25 |     
   26 |     // Cliquer sur le bouton principal "Demander un Devis Gratuit"
   27 |     await page.click('button.btn-primary[data-micromodal-trigger="modal-devis"]');
   28 |     
   29 |     // Vérifier que le modal s'ouvre
   30 |     await expect(page.locator('#modal-devis')).toBeVisible();
   31 |     await expect(page.locator('#modal-devis')).toHaveClass(/is-open/);
   32 |   });
   33 |
   34 |   test('should close modal when clicking X button', async ({ page }) => {
   35 |     await page.goto('/');
   36 |     
   37 |     // Ouvrir le modal
   38 |     await page.click('button[data-micromodal-trigger="modal-devis"]');
   39 |     await expect(page.locator('#modal-devis')).toBeVisible();
   40 |     
   41 |     // Fermer avec le bouton X
   42 |     await page.click('.modal__close');
   43 |     
   44 |     // Vérifier que le modal est fermé
   45 |     await expect(page.locator('#modal-devis')).not.toBeVisible();
   46 |     await expect(page.locator('#modal-devis')).not.toHaveClass(/is-open/);
   47 |   });
   48 |
   49 |   test('should close modal when clicking "Compris !" button', async ({ page }) => {
   50 |     await page.goto('/');
   51 |     
   52 |     // Ouvrir le modal
   53 |     await page.click('button[data-micromodal-trigger="modal-devis"]');
   54 |     await expect(page.locator('#modal-devis')).toBeVisible();
   55 |     
   56 |     // Fermer avec le bouton "Compris !"
   57 |     await page.click('button[data-micromodal-close]');
   58 |     
   59 |     // Vérifier que le modal est fermé
   60 |     await expect(page.locator('#modal-devis')).not.toBeVisible();
   61 |   });
   62 |
   63 |   test('should close modal when clicking outside (overlay)', async ({ page }) => {
   64 |     await page.goto('/');
   65 |     
   66 |     // Ouvrir le modal
   67 |     await page.click('button[data-micromodal-trigger="modal-devis"]');
   68 |     await expect(page.locator('#modal-devis')).toBeVisible();
   69 |     
   70 |     // Cliquer sur l'overlay (en dehors du modal)
   71 |     await page.click('.modal__overlay');
   72 |     
   73 |     // Vérifier que le modal est fermé
>  74 |     await expect(page.locator('#modal-devis')).not.toBeVisible();
      |                                                    ^ Error: Timed out 5000ms waiting for expect(locator).not.toBeVisible()
   75 |   });
   76 |
   77 |   test('should have clickable phone number link', async ({ page }) => {
   78 |     await page.goto('/');
   79 |     
   80 |     // Ouvrir le modal
   81 |     await page.click('button[data-micromodal-trigger="modal-devis"]');
   82 |     
   83 |     // Vérifier que le lien téléphone est présent et cliquable
   84 |     const phoneLink = page.locator('a[href="tel:4387251915"]');
   85 |     await expect(phoneLink).toBeVisible();
   86 |     await expect(phoneLink).toContainText('438-725-1915');
   87 |     
   88 |     // Vérifier que le lien a le bon href
   89 |     await expect(phoneLink).toHaveAttribute('href', 'tel:4387251915');
   90 |   });
   91 |
   92 |   test('should display correct modal content and styling', async ({ page }) => {
   93 |     await page.goto('/');
   94 |     
   95 |     // Ouvrir le modal
   96 |     await page.click('button[data-micromodal-trigger="modal-devis"]');
   97 |     
   98 |     // Vérifier tous les éléments du modal
   99 |     await expect(page.locator('#modal-devis .modal__container')).toBeVisible();
  100 |     await expect(page.locator('#modal-devis .bi-telephone')).toBeVisible();
  101 |     await expect(page.locator('#modal-devis .bi-chat-dots')).toBeVisible();
  102 |     await expect(page.locator('#modal-devis .bi-phone')).toBeVisible();
  103 |     await expect(page.locator('#modal-devis .bi-clock')).toBeVisible();
  104 |     await expect(page.locator('#modal-devis .bi-check-circle')).toBeVisible();
  105 |     
  106 |     // Vérifier le texte complet
  107 |     await expect(page.locator('#modal-devis')).toContainText('Disponible 7j/7 pour vos projets urgents');
  108 |     await expect(page.locator('#modal-devis')).toContainText('Réponse rapide garantie !');
  109 |   });
  110 | });
  111 |
```
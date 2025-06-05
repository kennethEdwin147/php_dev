# Test info

- Name: Responsive Design Tests >> should have readable text on all screen sizes
- Location: C:\Users\kenneth\Desktop\agence_web\tests\ui\responsive.spec.js:73:3

# Error details

```
Error: page.goto: Target page, context or browser has been closed
Call log:
  - navigating to "http://localhost:8080/", waiting until "load"

    at C:\Users\kenneth\Desktop\agence_web\tests\ui\responsive.spec.js:85:18
```

# Test source

```ts
   1 | const { test, expect, devices } = require('@playwright/test');
   2 |
   3 | test.describe('Responsive Design Tests', () => {
   4 |   test('should display mobile menu on small screens', async ({ page }) => {
   5 |     // Simuler un écran mobile
   6 |     await page.setViewportSize({ width: 375, height: 667 });
   7 |     await page.goto('/');
   8 |     
   9 |     // Vérifier que le menu hamburger est visible
   10 |     await expect(page.locator('.nav-icon')).toBeVisible();
   11 |     
   12 |     // Vérifier que le menu principal est caché
   13 |     await expect(page.locator('#navbar')).not.toBeVisible();
   14 |     
   15 |     // Cliquer sur le menu hamburger
   16 |     await page.click('.nav-icon');
   17 |     
   18 |     // Vérifier que le menu s'ouvre
   19 |     await expect(page.locator('#navbar')).toBeVisible();
   20 |   });
   21 |
   22 |   test('should hide mobile menu on desktop', async ({ page }) => {
   23 |     // Écran desktop
   24 |     await page.setViewportSize({ width: 1200, height: 800 });
   25 |     await page.goto('/');
   26 |     
   27 |     // Vérifier que le menu hamburger est caché
   28 |     await expect(page.locator('.nav-icon')).not.toBeVisible();
   29 |     
   30 |     // Vérifier que le menu principal est visible
   31 |     await expect(page.locator('#navbar')).toBeVisible();
   32 |   });
   33 |
   34 |   test('should display modal correctly on mobile', async ({ page }) => {
   35 |     // Écran mobile
   36 |     await page.setViewportSize({ width: 375, height: 667 });
   37 |     await page.goto('/');
   38 |     
   39 |     // Ouvrir le modal via le bouton principal
   40 |     await page.click('button.btn-primary[data-micromodal-trigger="modal-devis"]');
   41 |     
   42 |     // Vérifier que le modal s'affiche correctement
   43 |     await expect(page.locator('#modal-devis')).toBeVisible();
   44 |     await expect(page.locator('.modal__container')).toBeVisible();
   45 |     
   46 |     // Vérifier que le contenu est lisible
   47 |     await expect(page.locator('#modal-devis')).toContainText('438-725-1915');
   48 |   });
   49 |
   50 |   test('should have responsive form layout', async ({ page }) => {
   51 |     // Test sur différentes tailles d'écran
   52 |     const viewports = [
   53 |       { width: 375, height: 667 },   // Mobile
   54 |       { width: 768, height: 1024 },  // Tablet
   55 |       { width: 1200, height: 800 }   // Desktop
   56 |     ];
   57 |     
   58 |     for (const viewport of viewports) {
   59 |       await page.setViewportSize(viewport);
   60 |       await page.goto('/');
   61 |       
   62 |       // Aller au formulaire
   63 |       await page.click('a[href="#contact"]');
   64 |       
   65 |       // Vérifier que tous les champs sont visibles et accessibles
   66 |       await expect(page.locator('#name')).toBeVisible();
   67 |       await expect(page.locator('#email')).toBeVisible();
   68 |       await expect(page.locator('#message')).toBeVisible();
   69 |       await expect(page.locator('button[type="submit"]')).toBeVisible();
   70 |     }
   71 |   });
   72 |
   73 |   test('should have readable text on all screen sizes', async ({ page }) => {
   74 |     const viewports = [
   75 |       { width: 320, height: 568 },   // iPhone SE
   76 |       { width: 375, height: 667 },   // iPhone 6/7/8
   77 |       { width: 414, height: 896 },   // iPhone XR
   78 |       { width: 768, height: 1024 },  // iPad
   79 |       { width: 1024, height: 768 },  // iPad Landscape
   80 |       { width: 1200, height: 800 }   // Desktop
   81 |     ];
   82 |     
   83 |     for (const viewport of viewports) {
   84 |       await page.setViewportSize(viewport);
>  85 |       await page.goto('/');
      |                  ^ Error: page.goto: Target page, context or browser has been closed
   86 |       
   87 |       // Vérifier que le titre principal est visible et lisible
   88 |       await expect(page.locator('h1')).toBeVisible();
   89 |       
   90 |       // Vérifier que les sections principales sont accessibles
   91 |       await expect(page.locator('#services h2')).toBeVisible();
   92 |       await expect(page.locator('#contact h2')).toBeVisible();
   93 |     }
   94 |   });
   95 |
   96 |   test('should maintain functionality on touch devices', async ({ page }) => {
   97 |     // Simuler un appareil tactile
   98 |     await page.setViewportSize({ width: 375, height: 667 });
   99 |     await page.goto('/');
  100 |     
  101 |     // Test de navigation tactile
  102 |     await page.tap('a[href="#services"]');
  103 |     await expect(page.locator('#services')).toBeInViewport();
  104 |     
  105 |     // Test du modal avec touch
  106 |     await page.tap('button[data-micromodal-trigger="modal-devis"]');
  107 |     await expect(page.locator('#modal-devis')).toBeVisible();
  108 |     
  109 |     // Fermer le modal
  110 |     await page.tap('.modal__close');
  111 |     await expect(page.locator('#modal-devis')).not.toBeVisible();
  112 |     
  113 |     // Test du formulaire
  114 |     await page.tap('a[href="#contact"]');
  115 |     await page.tap('#name');
  116 |     await page.fill('#name', 'Test Touch');
  117 |     await expect(page.locator('#name')).toHaveValue('Test Touch');
  118 |   });
  119 |
  120 |   test('should have proper spacing and layout on mobile', async ({ page }) => {
  121 |     await page.setViewportSize({ width: 375, height: 667 });
  122 |     await page.goto('/');
  123 |     
  124 |     // Vérifier que les éléments ne se chevauchent pas
  125 |     const hero = page.locator('.min-vh-100');
  126 |     const services = page.locator('#services');
  127 |     
  128 |     await expect(hero).toBeVisible();
  129 |     await expect(services).toBeVisible();
  130 |     
  131 |     // Vérifier que les boutons sont assez grands pour être touchés facilement
  132 |     const buttons = page.locator('button, .btn');
  133 |     const buttonCount = await buttons.count();
  134 |     
  135 |     for (let i = 0; i < buttonCount; i++) {
  136 |       const button = buttons.nth(i);
  137 |       if (await button.isVisible()) {
  138 |         const box = await button.boundingBox();
  139 |         if (box) {
  140 |           // Les boutons doivent faire au moins 44px de haut (recommandation Apple/Google)
  141 |           expect(box.height).toBeGreaterThanOrEqual(40);
  142 |         }
  143 |       }
  144 |     }
  145 |   });
  146 | });
  147 |
```
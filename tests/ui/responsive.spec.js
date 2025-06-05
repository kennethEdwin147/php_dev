const { test, expect, devices } = require('@playwright/test');

test.describe('Responsive Design Tests', () => {
  test('should display mobile menu on small screens', async ({ page }) => {
    // Simuler un écran mobile
    await page.setViewportSize({ width: 375, height: 667 });
    await page.goto('/');
    
    // Vérifier que le menu hamburger est visible
    await expect(page.locator('.nav-icon')).toBeVisible();
    
    // Vérifier que le menu principal est caché
    await expect(page.locator('#navbar')).not.toBeVisible();
    
    // Cliquer sur le menu hamburger
    await page.click('.nav-icon');
    
    // Vérifier que le menu s'ouvre
    await expect(page.locator('#navbar')).toBeVisible();
  });

  test('should hide mobile menu on desktop', async ({ page }) => {
    // Écran desktop
    await page.setViewportSize({ width: 1200, height: 800 });
    await page.goto('/');
    
    // Vérifier que le menu hamburger est caché
    await expect(page.locator('.nav-icon')).not.toBeVisible();
    
    // Vérifier que le menu principal est visible
    await expect(page.locator('#navbar')).toBeVisible();
  });

  test('should display modal correctly on mobile', async ({ page }) => {
    // Écran mobile
    await page.setViewportSize({ width: 375, height: 667 });
    await page.goto('/');
    
    // Ouvrir le modal via le bouton principal
    await page.click('button.btn-primary[data-micromodal-trigger="modal-devis"]');
    
    // Vérifier que le modal s'affiche correctement
    await expect(page.locator('#modal-devis')).toBeVisible();
    await expect(page.locator('.modal__container')).toBeVisible();
    
    // Vérifier que le contenu est lisible
    await expect(page.locator('#modal-devis')).toContainText('438-725-1915');
  });

  test('should have responsive form layout', async ({ page }) => {
    // Test sur différentes tailles d'écran
    const viewports = [
      { width: 375, height: 667 },   // Mobile
      { width: 768, height: 1024 },  // Tablet
      { width: 1200, height: 800 }   // Desktop
    ];
    
    for (const viewport of viewports) {
      await page.setViewportSize(viewport);
      await page.goto('/');
      
      // Aller au formulaire
      await page.click('a[href="#contact"]');
      
      // Vérifier que tous les champs sont visibles et accessibles
      await expect(page.locator('#name')).toBeVisible();
      await expect(page.locator('#email')).toBeVisible();
      await expect(page.locator('#message')).toBeVisible();
      await expect(page.locator('button[type="submit"]')).toBeVisible();
    }
  });

  test('should have readable text on all screen sizes', async ({ page }) => {
    const viewports = [
      { width: 320, height: 568 },   // iPhone SE
      { width: 375, height: 667 },   // iPhone 6/7/8
      { width: 414, height: 896 },   // iPhone XR
      { width: 768, height: 1024 },  // iPad
      { width: 1024, height: 768 },  // iPad Landscape
      { width: 1200, height: 800 }   // Desktop
    ];
    
    for (const viewport of viewports) {
      await page.setViewportSize(viewport);
      await page.goto('/');
      
      // Vérifier que le titre principal est visible et lisible
      await expect(page.locator('h1')).toBeVisible();
      
      // Vérifier que les sections principales sont accessibles
      await expect(page.locator('#services h2')).toBeVisible();
      await expect(page.locator('#contact h2')).toBeVisible();
    }
  });

  test('should maintain functionality on touch devices', async ({ page }) => {
    // Simuler un appareil tactile
    await page.setViewportSize({ width: 375, height: 667 });
    await page.goto('/');
    
    // Test de navigation tactile
    await page.tap('a[href="#services"]');
    await expect(page.locator('#services')).toBeInViewport();
    
    // Test du modal avec touch
    await page.tap('button[data-micromodal-trigger="modal-devis"]');
    await expect(page.locator('#modal-devis')).toBeVisible();
    
    // Fermer le modal
    await page.tap('.modal__close');
    await expect(page.locator('#modal-devis')).not.toBeVisible();
    
    // Test du formulaire
    await page.tap('a[href="#contact"]');
    await page.tap('#name');
    await page.fill('#name', 'Test Touch');
    await expect(page.locator('#name')).toHaveValue('Test Touch');
  });

  test('should have proper spacing and layout on mobile', async ({ page }) => {
    await page.setViewportSize({ width: 375, height: 667 });
    await page.goto('/');
    
    // Vérifier que les éléments ne se chevauchent pas
    const hero = page.locator('.min-vh-100');
    const services = page.locator('#services');
    
    await expect(hero).toBeVisible();
    await expect(services).toBeVisible();
    
    // Vérifier que les boutons sont assez grands pour être touchés facilement
    const buttons = page.locator('button, .btn');
    const buttonCount = await buttons.count();
    
    for (let i = 0; i < buttonCount; i++) {
      const button = buttons.nth(i);
      if (await button.isVisible()) {
        const box = await button.boundingBox();
        if (box) {
          // Les boutons doivent faire au moins 44px de haut (recommandation Apple/Google)
          expect(box.height).toBeGreaterThanOrEqual(40);
        }
      }
    }
  });
}); 
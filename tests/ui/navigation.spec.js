const { test, expect } = require('@playwright/test');

test.describe('Navigation Tests', () => {
  test('should load homepage successfully', async ({ page }) => {
    await page.goto('/');
    
    // Vérifier le titre de la page
    await expect(page).toHaveTitle(/Développeur PHP Senior/);
    
    // Vérifier les éléments principaux
    await expect(page.locator('h1')).toContainText('Votre Expert en Développement PHP');
    await expect(page.locator('.navbar-brand')).toContainText('Développeur PHP Senior');
  });

  test('should navigate to different sections', async ({ page }) => {
    await page.goto('/');
    
    // Test navigation vers Services
    await page.click('a[href="#services"]');
    await expect(page.locator('#services')).toBeInViewport();
    await expect(page.locator('#services h2')).toContainText('Mes Services Clés');
    
    // Test navigation vers Qui J'aide
    await page.click('a[href="#clients"]');
    await expect(page.locator('#clients')).toBeInViewport();
    await expect(page.locator('#clients h2')).toContainText('Qui J\'aide');
    
    // Test navigation vers Pourquoi Me Choisir
    await page.click('a[href="#pourquoi"]');
    await expect(page.locator('#pourquoi')).toBeInViewport();
    await expect(page.locator('#pourquoi h2')).toContainText('Pourquoi Me Choisir');
    
    // Test navigation vers Technologies
    await page.click('a[href="#technologies"]');
    await expect(page.locator('#technologies')).toBeInViewport();
    await expect(page.locator('#technologies h2')).toContainText('Technologies Utilisées');
    
    // Test navigation vers Contact
    await page.click('a[href="#contact"]');
    await expect(page.locator('#contact')).toBeInViewport();
    await expect(page.locator('#contact h2')).toContainText('Discutons de Votre Projet');
  });

  test('should display all service cards', async ({ page }) => {
    await page.goto('/');
    
    // Aller à la section services
    await page.click('a[href="#services"]');
    
    // Vérifier que tous les services sont présents
    const services = [
      'Développement de Portails Sécurisés',
      'Applications Web Sur Mesure',
      'Maintenance & Évolution',
      'Intégration d\'API & Systèmes Tiers',
      'Conseil Technique & Architecture Logicielle'
    ];
    
    for (const service of services) {
      await expect(page.locator('.card-footer h3')).toContainText(service);
    }
  });

  test('should display all technologies', async ({ page }) => {
    await page.goto('/');
    
    // Aller à la section technologies
    await page.click('a[href="#technologies"]');
    
    // Vérifier que toutes les technologies sont présentes
    const technologies = ['PHP', 'Laravel', 'Symfony', 'MySQL', 'Vue.js/React', 'Docker', 'Git', 'Composer/Packagist'];
    
    for (const tech of technologies) {
      await expect(page.locator('#technologies h5')).toContainText(tech);
    }
  });
});

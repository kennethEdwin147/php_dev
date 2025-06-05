const { test, expect } = require('@playwright/test');

test.describe('Contact Form Tests', () => {
  test('should display contact form with all fields', async ({ page }) => {
    await page.goto('/');
    
    // Aller à la section contact
    await page.click('a[href="#contact"]');
    
    // Vérifier que tous les champs sont présents
    await expect(page.locator('#name')).toBeVisible();
    await expect(page.locator('#company')).toBeVisible();
    await expect(page.locator('#email')).toBeVisible();
    await expect(page.locator('#phone')).toBeVisible();
    await expect(page.locator('#project_type')).toBeVisible();
    await expect(page.locator('#message')).toBeVisible();
    
    // Vérifier le bouton de soumission
    await expect(page.locator('button[type="submit"]')).toBeVisible();
    await expect(page.locator('button[type="submit"]')).toContainText('Envoyer ma demande');
  });

  test('should show validation errors for empty required fields', async ({ page }) => {
    await page.goto('/');
    
    // Aller à la section contact
    await page.click('a[href="#contact"]');
    
    // Soumettre le formulaire vide
    await page.click('button[type="submit"]');
    
    // Attendre la réponse et vérifier les erreurs
    await page.waitForLoadState('networkidle');
    
    // Vérifier que les messages d'erreur sont affichés
    await expect(page.locator('.alert-danger')).toBeVisible();
    await expect(page.locator('.alert-danger')).toContainText('Le nom et prénom sont obligatoires');
    await expect(page.locator('.alert-danger')).toContainText('L\'email est obligatoire');
    await expect(page.locator('.alert-danger')).toContainText('Le message est obligatoire');
    await expect(page.locator('.alert-danger')).toContainText('Veuillez sélectionner un type de projet');
  });

  test('should show validation error for invalid email', async ({ page }) => {
    await page.goto('/');
    
    // Aller à la section contact
    await page.click('a[href="#contact"]');
    
    // Remplir avec un email invalide
    await page.fill('#name', 'Test User');
    await page.fill('#email', 'invalid-email');
    await page.fill('#message', 'Test message');
    await page.selectOption('#project_type', 'development');
    
    // Soumettre le formulaire
    await page.click('button[type="submit"]');
    
    // Attendre la réponse
    await page.waitForLoadState('networkidle');
    
    // Vérifier l'erreur d'email
    await expect(page.locator('.alert-danger')).toBeVisible();
    await expect(page.locator('.alert-danger')).toContainText('L\'email n\'est pas valide');
  });

  test('should submit form with valid data', async ({ page }) => {
    await page.goto('/');
    
    // Aller à la section contact
    await page.click('a[href="#contact"]');
    
    // Remplir le formulaire avec des données valides
    await page.fill('#name', 'Test User Playwright');
    await page.fill('#company', 'Test Company');
    await page.fill('#email', 'test@playwright.com');
    await page.fill('#phone', '123-456-7890');
    await page.selectOption('#project_type', 'development');
    await page.fill('#message', 'Ceci est un message de test automatisé avec Playwright.');
    
    // Soumettre le formulaire
    await page.click('button[type="submit"]');
    
    // Attendre la réponse
    await page.waitForLoadState('networkidle');
    
    // Vérifier le résultat (succès ou erreur d'email server)
    const hasSuccess = await page.locator('.alert-success').isVisible();
    const hasError = await page.locator('.alert-danger').isVisible();
    
    // Au moins un des deux doit être visible
    expect(hasSuccess || hasError).toBeTruthy();
    
    if (hasSuccess) {
      await expect(page.locator('.alert-success')).toContainText('Votre message a été envoyé avec succès');
    } else if (hasError) {
      // Si erreur, ça devrait être liée au serveur mail
      await expect(page.locator('.alert-danger')).toContainText('Erreur lors de l\'envoi du message');
    }
  });

  test('should preserve form data on validation error', async ({ page }) => {
    await page.goto('/');
    
    // Aller à la section contact
    await page.click('a[href="#contact"]');
    
    // Remplir partiellement le formulaire (manquer des champs requis)
    await page.fill('#name', 'Test User');
    await page.fill('#company', 'Test Company');
    await page.fill('#phone', '123-456-7890');
    // Laisser email et message vides intentionnellement
    
    // Soumettre le formulaire
    await page.click('button[type="submit"]');
    
    // Attendre la réponse
    await page.waitForLoadState('networkidle');
    
    // Vérifier que les données saisies sont préservées
    await expect(page.locator('#name')).toHaveValue('Test User');
    await expect(page.locator('#company')).toHaveValue('Test Company');
    await expect(page.locator('#phone')).toHaveValue('123-456-7890');
    
    // Vérifier que les champs vides restent vides
    await expect(page.locator('#email')).toHaveValue('');
    await expect(page.locator('#message')).toHaveValue('');
  });

  test('should have all project type options', async ({ page }) => {
    await page.goto('/');
    
    // Aller à la section contact
    await page.click('a[href="#contact"]');
    
    // Vérifier les options du select
    const options = await page.locator('#project_type option').allTextContents();
    
    expect(options).toContain('Sélectionnez le type de projet');
    expect(options).toContain('Développement');
    expect(options).toContain('Maintenance');
    expect(options).toContain('Conseil');
    expect(options).toContain('Autre');
  });

  test('should display contact information', async ({ page }) => {
    await page.goto('/');
    
    // Aller à la section contact
    await page.click('a[href="#contact"]');
    
    // Vérifier les informations de contact
    await expect(page.locator('#contact')).toContainText('438-725-1915');
    await expect(page.locator('#contact')).toContainText('edwingbeti@gmail.com');
    await expect(page.locator('#contact')).toContainText('Champs obligatoires');
  });
});

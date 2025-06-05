const { test, expect } = require('@playwright/test');

test.describe('Modal Popup Tests', () => {
  test('should open modal when clicking "Demander un Devis" in navbar', async ({ page }) => {
    await page.goto('/');
    
    // Vérifier que le modal est initialement caché
    await expect(page.locator('#modal-devis')).not.toBeVisible();
    
    // Cliquer sur le bouton "Demander un Devis" dans la navbar
    await page.click('button[data-micromodal-trigger="modal-devis"]');
    
    // Attendre que le modal soit visible
    await expect(page.locator('#modal-devis')).toBeVisible();
    await expect(page.locator('#modal-devis')).toHaveClass(/is-open/);
    
    // Vérifier le contenu du modal
    await expect(page.locator('#modal-devis-title')).toContainText('Contactez-moi directement');
    await expect(page.locator('#modal-devis')).toContainText('Pour toutes questions, devis, renseignements ou autre');
    await expect(page.locator('#modal-devis')).toContainText('438-725-1915');
  });

  test('should open modal when clicking "Demander un Devis Gratuit" in hero section', async ({ page }) => {
    await page.goto('/');
    
    // Cliquer sur le bouton principal "Demander un Devis Gratuit"
    await page.click('button.btn-primary[data-micromodal-trigger="modal-devis"]');
    
    // Vérifier que le modal s'ouvre
    await expect(page.locator('#modal-devis')).toBeVisible();
    await expect(page.locator('#modal-devis')).toHaveClass(/is-open/);
  });

  test('should close modal when clicking X button', async ({ page }) => {
    await page.goto('/');
    
    // Ouvrir le modal
    await page.click('button[data-micromodal-trigger="modal-devis"]');
    await expect(page.locator('#modal-devis')).toBeVisible();
    
    // Fermer avec le bouton X
    await page.click('.modal__close');
    
    // Vérifier que le modal est fermé
    await expect(page.locator('#modal-devis')).not.toBeVisible();
    await expect(page.locator('#modal-devis')).not.toHaveClass(/is-open/);
  });

  test('should close modal when clicking "Compris !" button', async ({ page }) => {
    await page.goto('/');
    
    // Ouvrir le modal
    await page.click('button[data-micromodal-trigger="modal-devis"]');
    await expect(page.locator('#modal-devis')).toBeVisible();
    
    // Fermer avec le bouton "Compris !"
    await page.click('button[data-micromodal-close]');
    
    // Vérifier que le modal est fermé
    await expect(page.locator('#modal-devis')).not.toBeVisible();
  });

  test('should close modal when clicking outside (overlay)', async ({ page }) => {
    await page.goto('/');
    
    // Ouvrir le modal
    await page.click('button[data-micromodal-trigger="modal-devis"]');
    await expect(page.locator('#modal-devis')).toBeVisible();
    
    // Cliquer sur l'overlay (en dehors du modal)
    await page.click('.modal__overlay');
    
    // Vérifier que le modal est fermé
    await expect(page.locator('#modal-devis')).not.toBeVisible();
  });

  test('should have clickable phone number link', async ({ page }) => {
    await page.goto('/');
    
    // Ouvrir le modal
    await page.click('button[data-micromodal-trigger="modal-devis"]');
    
    // Vérifier que le lien téléphone est présent et cliquable
    const phoneLink = page.locator('a[href="tel:4387251915"]');
    await expect(phoneLink).toBeVisible();
    await expect(phoneLink).toContainText('438-725-1915');
    
    // Vérifier que le lien a le bon href
    await expect(phoneLink).toHaveAttribute('href', 'tel:4387251915');
  });

  test('should display correct modal content and styling', async ({ page }) => {
    await page.goto('/');
    
    // Ouvrir le modal
    await page.click('button[data-micromodal-trigger="modal-devis"]');
    
    // Vérifier tous les éléments du modal
    await expect(page.locator('#modal-devis .modal__container')).toBeVisible();
    await expect(page.locator('#modal-devis .bi-telephone')).toBeVisible();
    await expect(page.locator('#modal-devis .bi-chat-dots')).toBeVisible();
    await expect(page.locator('#modal-devis .bi-phone')).toBeVisible();
    await expect(page.locator('#modal-devis .bi-clock')).toBeVisible();
    await expect(page.locator('#modal-devis .bi-check-circle')).toBeVisible();
    
    // Vérifier le texte complet
    await expect(page.locator('#modal-devis')).toContainText('Disponible 7j/7 pour vos projets urgents');
    await expect(page.locator('#modal-devis')).toContainText('Réponse rapide garantie !');
  });
});

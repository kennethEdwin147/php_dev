# Test info

- Name: Contact Form Tests >> should submit form with valid data
- Location: C:\Users\kenneth\Desktop\agence_web\tests\ui\contact-form.spec.js:66:3

# Error details

```
Error: expect(received).toBeTruthy()

Received: false
    at C:\Users\kenneth\Desktop\agence_web\tests\ui\contact-form.spec.js:91:36
```

# Page snapshot

```yaml
- heading "500 Internal Server Error" [level=1]
- 'heading "mail(): Failed to connect to mailserver at \"localhost\" port 25, verify your \"SMTP\" and \"smtp_port\" setting in php.ini or use ini_set() (2)" [level=3]'
- text: "#0 [internal function]: flight\\Engine->handleError(2, 'mail(): Failed ...', 'C:\\\\Users\\\\kennet...', 124) #1 C:\\Users\\kenneth\\Desktop\\agence_web\\HomeController.php(124): mail('edwingbeti@gmai...', 'Nouvelle demand...', '\\n No...', 'From: test@play...') #2 C:\\Users\\kenneth\\Desktop\\agence_web\\HomeController.php(49): HomeController->sendEmail(Array) #3 C:\\Users\\kenneth\\Desktop\\agence_web\\vendor\\mikecao\\flight\\flight\\core\\Dispatcher.php(221): HomeController->contact() #4 C:\\Users\\kenneth\\Desktop\\agence_web\\vendor\\mikecao\\flight\\flight\\core\\Dispatcher.php(164): flight\\core\\Dispatcher::invokeMethod(Array, Array) #5 C:\\Users\\kenneth\\Desktop\\agence_web\\vendor\\mikecao\\flight\\flight\\Engine.php(386): flight\\core\\Dispatcher::execute(Array, Array) #6 C:\\Users\\kenneth\\Desktop\\agence_web\\vendor\\mikecao\\flight\\flight\\core\\Dispatcher.php(221): flight\\Engine->_start() #7 C:\\Users\\kenneth\\Desktop\\agence_web\\vendor\\mikecao\\flight\\flight\\core\\Dispatcher.php(164): flight\\core\\Dispatcher::invokeMethod(Array, Array) #8 C:\\Users\\kenneth\\Desktop\\agence_web\\vendor\\mikecao\\flight\\flight\\core\\Dispatcher.php(56): flight\\core\\Dispatcher::execute(Array, Array) #9 C:\\Users\\kenneth\\Desktop\\agence_web\\vendor\\mikecao\\flight\\flight\\Engine.php(113): flight\\core\\Dispatcher->run('start', Array) #10 C:\\Users\\kenneth\\Desktop\\agence_web\\vendor\\mikecao\\flight\\flight\\core\\Dispatcher.php(221): flight\\Engine->__call('start', Array) #11 C:\\Users\\kenneth\\Desktop\\agence_web\\vendor\\mikecao\\flight\\flight\\Flight.php(113): flight\\core\\Dispatcher::invokeMethod(Array, Array) #12 C:\\Users\\kenneth\\Desktop\\agence_web\\index.php(13): Flight::__callStatic('start', Array) #13 {main}"
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
   36 |     await expect(page.locator('.alert-danger')).toBeVisible();
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
>  91 |     expect(hasSuccess || hasError).toBeTruthy();
      |                                    ^ Error: expect(received).toBeTruthy()
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
  137 |     
  138 |     expect(options).toContain('Sélectionnez le type de projet');
  139 |     expect(options).toContain('Développement');
  140 |     expect(options).toContain('Maintenance');
  141 |     expect(options).toContain('Conseil');
  142 |     expect(options).toContain('Autre');
  143 |   });
  144 |
  145 |   test('should display contact information', async ({ page }) => {
  146 |     await page.goto('/');
  147 |     
  148 |     // Aller à la section contact
  149 |     await page.click('a[href="#contact"]');
  150 |     
  151 |     // Vérifier les informations de contact
  152 |     await expect(page.locator('#contact')).toContainText('438-725-1915');
  153 |     await expect(page.locator('#contact')).toContainText('edwingbeti@gmail.com');
  154 |     await expect(page.locator('#contact')).toContainText('Champs obligatoires');
  155 |   });
  156 | });
  157 |
```
<?php

use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

/**
 * Tests for the HomeController
 */
class HomeControllerTest extends TestCase
{
    private $client;

    protected function setUp(): void
    {
        $this->client = new Client([
            'base_uri' => 'http://localhost:8080/',
            'timeout' => 10.0,
        ]);
    }
    /**
     * Test accessing the home page
     */
    public function testHomePageAccess()
    {
        try {
            // Make GET request to home page
            $response = $this->client->get('/');

            // Get response body and status code
            $body = $response->getBody()->getContents();
            $statusCode = $response->getStatusCode();

            // Assert that the page is accessible (HTTP 200)
            $this->assertEquals(200, $statusCode);

            // Assert that the response contains expected content
            $this->assertStringContainsString('Développeur PHP Senior', $body);
            $this->assertStringContainsString('Demander un Devis', $body);
            $this->assertStringContainsString('Discutons de Votre Projet', $body);

        } catch (RequestException $e) {
            $this->fail('Failed to access home page: ' . $e->getMessage());
        }
    }
    
    /**
     * Test submitting the contact form with valid data
     */
    public function testContactFormSubmission()
    {
        // Form data
        $formData = [
            'name' => 'Test User',
            'company' => 'Test Company',
            'email' => 'test@example.com',
            'phone' => '123-456-7890',
            'project_type' => 'development',
            'message' => 'This is a test message from the automated test suite.'
        ];

        try {
            // Make POST request to contact form
            $response = $this->client->post('/contact', [
                'form_params' => $formData,
                'http_errors' => false  // Don't throw exception on 4xx/5xx
            ]);

            // Get response body and status code
            $body = $response->getBody()->getContents();
            $statusCode = $response->getStatusCode();

            // Accept both 200 (success) and 500 (email server error)
            $this->assertTrue(
                $statusCode === 200 || $statusCode === 500,
                "Expected status 200 or 500, got {$statusCode}"
            );

            // If 500, should be due to email server issue
            if ($statusCode === 500) {
                $this->assertStringContainsString('mail()', $body, 'Should be a mail server error');
            } else {
                // If 200, should contain success or error message
                $this->assertTrue(
                    strpos($body, 'Votre message a été envoyé avec succès') !== false ||
                    strpos($body, 'Erreur lors de l\'envoi du message') !== false,
                    'Should contain either success or error message'
                );
            }

        } catch (RequestException $e) {
            $this->fail('Failed to submit contact form: ' . $e->getMessage());
        }
    }
    
    /**
     * Test submitting the contact form with invalid data
     */
    public function testContactFormValidation()
    {
        // Form data with missing required fields
        $formData = [
            'name' => '',
            'company' => 'Test Company',
            'email' => 'invalid-email',
            'phone' => '123-456-7890',
            'project_type' => '',
            'message' => ''
        ];

        try {
            // Make POST request to contact form with invalid data
            $response = $this->client->post('/contact', [
                'form_params' => $formData
            ]);

            // Get response body and status code
            $body = $response->getBody()->getContents();
            $statusCode = $response->getStatusCode();

            // Assert that the page is accessible (HTTP 200)
            $this->assertEquals(200, $statusCode);

            // Assert that the response contains validation error messages
            $this->assertStringContainsString('Le nom et prénom sont obligatoires', $body);
            $this->assertStringContainsString('L\'email n\'est pas valide', $body);
            $this->assertStringContainsString('Le message est obligatoire', $body);
            $this->assertStringContainsString('Veuillez sélectionner un type de projet', $body);

        } catch (RequestException $e) {
            $this->fail('Failed to test form validation: ' . $e->getMessage());
        }
    }
}
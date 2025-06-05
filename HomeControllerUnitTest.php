<?php

use PHPUnit\Framework\TestCase;

/**
 * Unit tests for HomeController methods
 */
class HomeControllerUnitTest extends TestCase
{
    private $controller;
    
    protected function setUp(): void
    {
        require_once 'HomeController.php';
        $this->controller = new HomeController();
    }
    
    /**
     * Test validation with valid data
     */
    public function testValidationWithValidData()
    {
        $validData = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'message' => 'Test message',
            'project_type' => 'development'
        ];
        
        // Use reflection to access private method
        $reflection = new ReflectionClass($this->controller);
        $method = $reflection->getMethod('validateForm');
        $method->setAccessible(true);
        
        $errors = $method->invoke($this->controller, $validData);
        
        $this->assertEmpty($errors, 'Valid data should not produce errors');
    }
    
    /**
     * Test validation with missing name
     */
    public function testValidationWithMissingName()
    {
        $invalidData = [
            'name' => '',
            'email' => 'john@example.com',
            'message' => 'Test message',
            'project_type' => 'development'
        ];
        
        $reflection = new ReflectionClass($this->controller);
        $method = $reflection->getMethod('validateForm');
        $method->setAccessible(true);
        
        $errors = $method->invoke($this->controller, $invalidData);
        
        $this->assertContains('Le nom et prénom sont obligatoires.', $errors);
    }
    
    /**
     * Test validation with invalid email
     */
    public function testValidationWithInvalidEmail()
    {
        $invalidData = [
            'name' => 'John Doe',
            'email' => 'invalid-email',
            'message' => 'Test message',
            'project_type' => 'development'
        ];
        
        $reflection = new ReflectionClass($this->controller);
        $method = $reflection->getMethod('validateForm');
        $method->setAccessible(true);
        
        $errors = $method->invoke($this->controller, $invalidData);
        
        $this->assertContains('L\'email n\'est pas valide.', $errors);
    }
    
    /**
     * Test validation with missing message
     */
    public function testValidationWithMissingMessage()
    {
        $invalidData = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'message' => '',
            'project_type' => 'development'
        ];
        
        $reflection = new ReflectionClass($this->controller);
        $method = $reflection->getMethod('validateForm');
        $method->setAccessible(true);
        
        $errors = $method->invoke($this->controller, $invalidData);
        
        $this->assertContains('Le message est obligatoire.', $errors);
    }
    
    /**
     * Test validation with missing project type
     */
    public function testValidationWithMissingProjectType()
    {
        $invalidData = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'message' => 'Test message',
            'project_type' => ''
        ];
        
        $reflection = new ReflectionClass($this->controller);
        $method = $reflection->getMethod('validateForm');
        $method->setAccessible(true);
        
        $errors = $method->invoke($this->controller, $invalidData);
        
        $this->assertContains('Veuillez sélectionner un type de projet.', $errors);
    }
}

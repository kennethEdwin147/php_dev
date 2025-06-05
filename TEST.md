# Tests for Agence Web Application

This directory contains automated tests for the Agence Web application.

## Test Coverage

The tests cover the following functionality:

1. **Home Page Access**: Verifies that the home page is accessible and contains expected content.
2. **Contact Form Submission**: Tests submitting the contact form with valid data.
3. **Form Validation**: Tests the form validation by submitting invalid data.

## Running the Tests

To run the tests, you need to have a local development server running with the application accessible at http://localhost.

### Prerequisites

- PHP 7.4 or higher
- Composer
- A local web server (Apache, Nginx, etc.)

### Steps to Run Tests

1. Make sure your application is running on a local web server
2. From the project root directory, run:

```bash
vendor/bin/phpunit
```

Or to run a specific test:

```bash
vendor/bin/phpunit tests/HomeControllerTest.php
```

## Test Structure

- `HomeControllerTest.php`: Tests for the HomeController, including home page access and contact form submission.

## Notes

- The tests use cURL to make HTTP requests to the application.
- The tests assume the application is running at http://localhost.
- If your application is running at a different URL, update the URL in the test files.
- These tests are designed to be run in a development or testing environment, not in production.
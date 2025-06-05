<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/HomeController.php';

// Instancier le contrôleur
$homeController = new HomeController();

// Routes
Flight::route('/', [$homeController, 'index']);
Flight::route('POST /contact', [$homeController, 'contact']);

// Démarrer l'application
Flight::start();

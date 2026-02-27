<?php
// Application bootstrap code for AcademiasFC

// Load Composer's autoloader if using Composer
require 'vendor/autoload.php';

// Initialize application
$app = new Application();

// Set up routing
$app->router->get('/', function() {
    echo 'Welcome to AcademiasFC!';
});

// Run application
$app->run();

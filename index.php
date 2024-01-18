<?php

/* Dhiyaa Nazim
 * January 2024
 * https://dhiyaa-naz.greenriverdev.com/328/pets/
 * This is my CONTROLLER for the Pets app
 */

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the autoload file
require_once ('vendor/autoload.php');

// Instantiate Fat-Free framework (F3)
$f3 = Base::instance(); // static method

// Define a default route
$f3->route('GET /', function () {
    echo "Pet Home";

});

// Run Fat-Free
$f3->run(); // instance method
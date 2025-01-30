<?php

require_once __DIR__ . '/../controllers/MainController.php';


$router = new AltoRouter();

// Calcul automatique de la base path (en incluant /public) utiliser avec Xampp
//$basePath = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
$basePath = '';
$router->setBasePath($basePath);

// Routes
$router->map('GET', '/', 'MainController#home', 'home');


// Retourne l'objet router
return $router;

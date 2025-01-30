<?php

require_once __DIR__ . '/../controllers/MainController.php';
require_once __DIR__ . '/../controllers/CatalogController.php';

$router = new AltoRouter();

// Calcul automatique de la base path (en incluant /public) utiliser avec Xampp
//$basePath = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
$basePath = '';
$router->setBasePath($basePath);

// Routes
$router->map('GET', '/', 'MainController#home', 'home');
$router->map('GET', '/contact', 'MainController#contact', 'contact');

$router->map('GET', '/catalog', 'CatalogController#catalog', 'catalog');
$router->map('GET', '/product', 'CatalogController#product', 'product');

// Retourne l'objet router
return $router;

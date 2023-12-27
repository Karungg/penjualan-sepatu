<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


$routes->group('admin', ['filter' => 'role:admin', 'login'], static function ($routes) {
    $routes->get('', [\App\Controllers\DashboardController::class, 'index']);
    $routes->get('products', [\App\Controllers\ProductController::class, 'index']);
    $routes->get('users', [\App\Controllers\UserController::class, 'index']);
});

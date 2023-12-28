<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


$routes->get('admin', 'DashboardController::index', ['filter' => 'role:admin', 'login']);

$routes->group('admin/categories', ['filter' => 'role:admin', 'login'], static function ($routes) {
    $routes->get('', [\App\Controllers\CategoryController::class, 'index']);
});
$routes->group('admin/products', ['filter' => 'role:admin', 'login'], static function ($routes) {
    $routes->get('', [\App\Controllers\ProductController::class, 'index']);
});
$routes->group('admin/users', ['filter' => 'role:admin', 'login'], static function ($routes) {
    $routes->get('', [\App\Controllers\UserController::class, 'index']);
});

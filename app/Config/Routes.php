<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [\App\Controllers\Home::class, 'index']);
$routes->get('/products', [\App\Controllers\Home::class, 'products']);
$routes->get('/products/detail/(:num)', [\App\Controllers\Home::class, 'detail/$1']);


$routes->get('admin', 'DashboardController::index', ['filter' => 'role:admin', 'login']);

$routes->group('admin/categories', ['filter' => 'role:admin', 'login'], static function ($routes) {
    $routes->get('', [\App\Controllers\CategoryController::class, 'index']);
    $routes->get('add', [\App\Controllers\CategoryController::class, 'create']);
    $routes->post('add', [\App\Controllers\CategoryController::class, 'store']);
    $routes->get('edit/(:num)', [\App\Controllers\CategoryController::class, 'edit/$1']);
    $routes->put('edit/(:num)', [\App\Controllers\CategoryController::class, 'update/$1']);
    $routes->delete('delete/(:num)', [\App\Controllers\CategoryController::class, 'delete/$1']);
});

$routes->group('admin/products', ['filter' => 'role:admin', 'login'], static function ($routes) {
    $routes->get('', [\App\Controllers\ProductController::class, 'index']);
    $routes->get('add', [\App\Controllers\ProductController::class, 'create']);
    $routes->post('add', [\App\Controllers\ProductController::class, 'store']);
    $routes->get('edit/(:num)', [\App\Controllers\ProductController::class, 'edit']);
    $routes->put('edit/(:num)', [\App\Controllers\ProductController::class, 'update']);
    $routes->delete('delete/(:num)', [\App\Controllers\ProductController::class, 'delete/$1']);
});

$routes->group('admin/stocks', ['filter' => 'role:admin', 'login'], static function ($routes) {
    $routes->get('', [\App\Controllers\StockController::class, 'index']);
    $routes->get('add', [\App\Controllers\StockController::class, 'create']);
    $routes->post('add', [\App\Controllers\StockController::class, 'store']);
    $routes->get('edit/(:num)', [\App\Controllers\StockController::class, 'edit']);
    $routes->put('edit/(:num)', [\App\Controllers\StockController::class, 'update']);
    $routes->delete('delete/(:num)', [\App\Controllers\StockController::class, 'delete/$1']);
});

$routes->group('admin/customers', ['filter' => 'role:admin', 'login'], static function ($routes) {
    $routes->get('', [\App\Controllers\UserController::class, 'index']);
    $routes->get('detail/(:num)', [\App\Controllers\UserController::class, 'show/$1']);
});

$routes->group('admin/orders', ['filter' => 'role:admin', 'login'], static function ($routes) {
    $routes->get('', [\App\Controllers\OrderController::class, 'index']);
});

<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


$routes->group('admin', ['filter' => 'role:admin', 'login'], static function ($routes) {
    $routes->get('', [\App\Controllers\DashboardController::class, 'index']);
});

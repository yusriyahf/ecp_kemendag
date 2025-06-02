<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Admin routes
$routes->group('admin', function ($routes) {
    $routes->get('/', 'Admin\Dashboard::index');
    $routes->get('users', 'Admin\Dashboard::users'); // contoh tambahan
});

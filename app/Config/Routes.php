<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Landing::index');
$routes->get('about', 'Landing::about');

$routes->get('product', 'Product::index');
$routes->get('product/(:segment)', 'Product::category/$1');
$routes->get('product/(:segment)/(:segment)', 'Product::detail/$1/$2');

// Admin routes
$routes->group('admin', function ($routes) {
    $routes->get('/', 'Admin\Dashboard::index');
    $routes->get('users', 'Admin\Dashboard::users'); // contoh tambahan
});

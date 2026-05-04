<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::login');
$routes->post('/loginProcess', 'Auth::loginProcess');
$routes->get('/logout', 'Auth::logout');

$routes->get('admin/dashboard', 'Admin::dashboard');
$routes->get('staff/dashboard', 'Staff::dashboard');

$routes->get('/test', function() {
    return "Test route works!";
});

$routes->get('/admin/test', 'Admin::dashboard');
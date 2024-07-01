<?php

use CodeIgniter\Router\RouteCollection;

$routes->setAutoRoute(true);

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

/*
$routes->group('users', function ($routes) {
    $routes->get('list', 'Users::list');
    $routes->get('(:num)', 'Users::get_user/$i');
    $routes->options('(:any)', 'Users::options_respond');
}); 
*/
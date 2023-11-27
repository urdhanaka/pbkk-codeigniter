<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/hello_world', 'Page::hello_world');

// $routes->setAutoRoute(false);

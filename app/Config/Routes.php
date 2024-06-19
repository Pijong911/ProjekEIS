<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'ObatController::index');
$routes->get('/obat/edit/(:num)', 'ObatController::edit/$1');
$routes->match(['get', 'post'], 'obat/update/(:segment)', 'ObatController::update/$1');
$routes->get('/obat', 'ObatController::index');
$routes->get('/obat/create', 'ObatController::create');
$routes->post('/obat/store', 'ObatController::create');
$routes->get('/obat/delete/(:num)', 'ObatController::delete/$1');
$routes->get('/obat/show/(:num)', 'ObatController::show/$1');

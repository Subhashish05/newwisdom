<?php

use App\Controllers\Pages;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [Pages::class, 'index']);
$routes->get('/(:segment)', [Pages::class, 'page/$1']);

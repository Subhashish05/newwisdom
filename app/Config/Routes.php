<?php

use App\Controllers\Pages;
use App\Controllers\Backend;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [Pages::class, 'index']);
$routes->post('/footer_enquiry', [Backend::class, 'footer_enquiry']);
$routes->get('/event', [Pages::class, 'event']);
$routes->get('/event/(:segment)', [Pages::class, 'event/$1']);
$routes->get('/news/(:segment)', [Pages::class, 'news/$1']);
$routes->get('/(:segment)', [Pages::class, 'page/$1']);

<?php

use App\Controllers\Pages;
use App\Controllers\BackendController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [Pages::class, 'index']);
$routes->get('/teachers', [Pages::class, 'teachers']);
$routes->get('/gallery', [Pages::class, 'gallery']);
$routes->get('/notice', [Pages::class, 'notice']);
$routes->get('/articles', [Pages::class, 'articles']);
$routes->get('/articles/(:segment)', [Pages::class, 'articles/$1']);
$routes->get('/article/(:segment)', [Pages::class, 'article/$1']);
$routes->get('/(:segment)', [Pages::class, 'page/$1']);

$routes->post('/footer_enquiry', [BackendController::class, 'footer_enquiry']);
$routes->post('/enrollment_form', [BackendController::class, 'enrollment_form']);
$routes->post('/contact_form', [BackendController::class, 'contact_form']);
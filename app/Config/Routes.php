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
$routes->get('/event', [Pages::class, 'event']);
$routes->get('/event/(:segment)', [Pages::class, 'event/$1']);
$routes->get('/news/(:segment)', [Pages::class, 'news/$1']);
$routes->get('/(:segment)', [Pages::class, 'page/$1']);

$routes->post('/footer_enquiry', [BackendController::class, 'footer_enquiry']);
$routes->post('/enrollment_form', [BackendController::class, 'enrollment_form']);
$routes->post('/contact_form', [BackendController::class, 'contact_form']);
<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/tasks', 'TaskController::index');


$routes->get('/tasks/create', 'TaskController::create');
$routes->post('/tasks', 'TaskController::store');

$routes->get('/tasks/edit/(:num)', 'TaskController::edit/$1');

$routes->post('/tasks/update/(:num)','TaskController::update/$1');

$routes->get('/tasks/delete/(:num)','TaskController::delete/$1');




$routes->group('api', function($routes) {
    $routes->get('tasks', 'Api\TaskApiController::index');
    $routes->get('tasks/(:num)', 'Api\TaskApiController::show/$1');
    $routes->post('tasks', 'Api\TaskApiController::create');
    $routes->put('tasks/(:num)', 'Api\TaskApiController::update/$1');
    $routes->delete('tasks/(:num)', 'Api\TaskApiController::delete/$1');
});





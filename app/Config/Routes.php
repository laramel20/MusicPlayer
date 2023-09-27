<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/Main', 'MusicController::index');
$routes->get('/upload', 'MainController::add');
$routes->get('/playlist', 'MainController::playlist');

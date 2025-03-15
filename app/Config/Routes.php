<?php


use CodeIgniter\Router\RouteCollection;


/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/ola', 'Ola::cumprimenta');
$routes->get('/usuarios', 'UsuarioController::index');
$routes->get('/usuarios/criar', 'UsuarioController::criar');
$routes->post('/usuarios/salvar', 'UsuarioController::salvar');
$routes->get('/usuarios/editar/(:num)', 'UsuarioController::editar/$1');
$routes->post('/usuarios/atualizar/(:num)', 'UsuarioController::atualizar/$1');
$routes->get('/usuarios/excluir/(:num)', 'UsuarioController::excluir/$1');
<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->match(['get', 'post'], '/', 'Blue::index');
// Productos
$routes->match(['get', 'post'], 'productos', 'Productos::index');
$routes->post('/productos/create', 'Productos::create');
// gastos
$routes->match(['get', 'post'], 'gastos', 'Gastos::index');
$routes->post('/gastos/create', 'Gastos::create');
// ventas
$routes->match(['get', 'post'], 'ventas', 'Ventas::index');
$routes->post('/ventas/create', 'Ventas::create');
$routes->match(['get', 'post'], '/ventas/delete/(:segment)', 'Ventas::delete/$1');
$routes->match(['get', 'post'], '/ventas/read/(:segment)', 'Ventas::read/$1');
// apartados
$routes->match(['get', 'post'], 'apartados', 'Apartados::index');
$routes->post('/apartados/create', 'Apartados::create');
$routes->match(['get', 'post'], '/apartados/read/(:segment)', 'Apartados::read/$1');
// abonos
// $routes->match(['get', 'post'], 'ventas', 'Ventas::index');
$routes->post('/abonos/create', 'Abonos::create');
// clientes
$routes->match(['get', 'post'], 'clientes', 'Clientes::index');
$routes->post('/clientes/create', 'Clientes::create');
$routes->match(['get', 'post'], '/clientes/read/(:segment)', 'Clientes::read/$1');
// ajax
$routes->match(['get', 'post'], '/ajax/get-ventas-dia', 'Ajax::get_ventas_dia');

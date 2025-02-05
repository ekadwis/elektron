<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::dashboard');
$routes->get('/produk', 'Home::index');
$routes->post('/tambahbarang', 'Home::tambahbarang');
$routes->get('/edit/(:any)', 'Home::edit/$1');
$routes->get('/delete/(:any)', 'Home::delete/$1');
$routes->post('/edit-barang', 'Home::editbarang');

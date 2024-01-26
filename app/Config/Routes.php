<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// home
$routes->get('/', 'Dashboard::index');

// dashboard
$routes->get('/erp/dashboard', 'Dashboard::index');

// usuario
$routes->get('/login', 'Usuario::login');
$routes->post('/login/autenticar', 'Usuario::autenticar');
$routes->get('/logoff', 'Usuario::logoff');

// categoria
$routes->get('/erp/dashboard/categoria', 'Categoria::index');
$routes->get('/erp/dashboard/categoria/novo', 'Categoria::novo');
$routes->get('/erp/dashboard/categoria/editar/(:num)', 'Categoria::editar/$1');

// marca
$routes->get('/erp/dashboard/marca', 'Marca::index');
$routes->get('/erp/dashboard/marca/novo', 'Marca::novo');
$routes->get('/erp/dashboard/marca/editar/(:num)', 'Marca::editar/$1');

// unidade
$routes->get('/erp/dashboard/unidade', 'Unidade::index');
$routes->get('/erp/dashboard/unidade/novo', 'Unidade::novo');
$routes->get('/erp/dashboard/unidade/editar/(:num)', 'Unidade::editar/$1');

// fabricante
$routes->get('/erp/dashboard/fabricante', 'Fabricante::index');
$routes->get('/erp/dashboard/fabricante/novo', 'Fabricante::novo');
$routes->get('/erp/dashboard/fabricante/editar/(:num)', 'Fabricante::editar/$1');

// carga
$routes->get('/erp/dashboard/carga', 'Carga::index');
$routes->get('/erp/dashboard/carga/novo', 'Carga::novo');
$routes->get('/erp/dashboard/carga/editar/(:num)', 'Carga::editar/$1');

// vendedor
$routes->get('/erp/dashboard/vendedor', 'Vendedor::index');
$routes->get('/erp/dashboard/vendedor/novo', 'Vendedor::novo');
$routes->get('/erp/dashboard/vendedor/editar/(:num)', 'Vendedor::editar/$1');

// transportador
$routes->get('/erp/dashboard/transportador', 'Transportador::index');
$routes->get('/erp/dashboard/transportador/novo', 'Transportador::novo');
$routes->get('/erp/dashboard/transportador/editar/(:num)', 'Transportador::editar/$1');

// registradora
$routes->get('/erp/dashboard/registradora', 'Registradora::index');
$routes->get('/erp/dashboard/registradora/novo', 'Registradora::novo');
$routes->get('/erp/dashboard/registradora/editar/(:num)', 'Registradora::editar/$1');

// despesa
$routes->get('/erp/dashboard/despesa', 'Despesa::index');
$routes->get('/erp/dashboard/despesa/novo', 'Despesa::novo');
$routes->get('/erp/dashboard/despesa/editar/(:num)', 'Despesa::editar/$1');

// receita
$routes->get('/erp/dashboard/receita', 'Receita::index');
$routes->get('/erp/dashboard/receita/novo', 'Receita::novo');
$routes->get('/erp/dashboard/receita/editar/(:num)', 'Receita::editar/$1');

// configuracao
$routes->get('/erp/dashboard/configuracao/empresa', 'Configuracao::empresa');

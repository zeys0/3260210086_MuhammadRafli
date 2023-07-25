<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/comik', 'pages::index');
$routes->get('/Comics/(:segment)', 'Comics::detail/$1');
$routes->get('/Comics/edit/(:segment)', 'Comics::edit/$1');

// $routes->get('/', 'Auth::index');
$routes->get('/', 'pages::index');
$routes->get('/Library/(:segment)', 'Library::detail/$1');
$routes->get('/Library/edit/(:segment)', 'Library::edit/$1');
$routes->delete('/library/(:segment)', 'library::delete/$1');

// login
// $routes->get('/register', 'Auth::register');
// $routes->post('/getRegister', 'Auth::getRegister');


$routes->get('/crud', 'crud::index');
$routes->get('/crud/insert', 'crud::insert');
$routes->post('/crud/save', 'crud::save');

$routes->get('/crud/(:segment)', 'crud::edit/$1');
$routes->post('/crud/(:segment)', 'crud::update/$1');

$routes->delete('/crud/(:segment)', 'crud::delete/$1');

// app/Config/Routes.php




$routes->get('/prak', 'pagesPrak::index');
$routes->get('/hellobumi', 'HelloWorld::Layout');
$routes->get('/form', 'FormMahasiswa::InputView');
$routes->post('/form', 'FormMahasiswa::ResultView');








/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

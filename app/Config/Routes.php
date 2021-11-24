<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('login', 'AccountCtl::login');
$routes->get('register', 'AccountCtl::register');
$routes->get('dashboard/profile', 'DashboardCtl::profile' , ['filter' => 'auth']);
$routes->get('dashboard/password', 'DashboardCtl::password' , ['filter' => 'auth']);
$routes->get('panel/event', 'AdminCtl::event' , ['filter' => 'auth']);
$routes->get('panel/participant', 'AdminCtl::participant' , ['filter' => 'auth']);
$routes->get('panel/event/edit/(:any)', 'AdminCtl::editEvent/$1' , ['filter' => 'auth']);
$routes->get('panel/event/input', 'AdminCtl::inputEvent' , ['filter' => 'auth']);
$routes->get('panel', 'AdminCtl::index' );



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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

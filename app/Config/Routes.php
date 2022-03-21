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

// User Management
$routes->get('dashboard/signup', 'SignupController::index');
$routes->post('dashboard/signup', 'SignupController::store');
$routes->get('dashboard/signin', 'SigninController::index');
$routes->post('dashboard/signin', 'SigninController::loginAuth');
$routes->get('dashboard/logout', 'SigninController::logout');


// Dashboard
$routes->match(['get', 'post'], '/dashboard/post-create', 'Posts::create', ['filter' => 'authGuard']);
$routes->get('/dashboard/posts/(:segment)', 'Posts::view/$1');
$routes->get('/dashboard/post-delete/(:segment)', 'Posts::delete/$1');
$routes->post('/dashboard/post-update/(:segment)', 'Posts::update/$1');
$routes->get('/dashboard', 'Posts::index', ['filter' => 'authGuard']);


$routes->get('/articles', 'Pages::articles');
$routes->get('/articles/(:segment)', 'Pages::article_detail/$1');
$routes->get('/contact', 'Contact::index');
$routes->get('/', 'Pages::index');
$routes->get('(:any)', 'Pages::view/$1');



$routes->set404Override(function(){
    $data=[
        'title' => 'Page Not Found'
    ];
    return view('pages/error', $data);
});
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

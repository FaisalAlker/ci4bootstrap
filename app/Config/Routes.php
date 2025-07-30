<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//Register
$routes->get('/register', 'Login::register');
$routes->post('/register', 'Login::register');

//Login
$routes->get('/login', 'Login::index');
$routes->post('/login/submit', 'Login::submit');

// Logout
$routes->get('/logout', 'Login::logout');

//Login
$routes->get('/jwt/login', 'SafeLogin::index');
$routes->post('/jwt/submit', 'SafeLogin::submit');
$routes->get('/jwt/valid', 'SafeLogin::jwt_valid', ['filter' => 'jwt_token']);
$routes->get('/jwt/logout', 'SafeLogin::logout', ['filter' => 'jwt_token']);

//Protected Route
// domain.com/admin
$routes->group('admin', ['filter' => 'auth'], function ($routes) {
    //domain.com/admin/dashboard
    $routes->get('dashboard', 'Users::dashboard');
    //domain.com/admin/user_data
    $routes->get('user_data', 'Users::index');
    $routes->get('profile', 'Profile::index');  
    $routes->post('upload_avatar', 'Profile::uploadAvatar');  
});


$routes->get('/sorting', 'Home::sorting');
$routes->get('/datatables', 'Home::datatables');








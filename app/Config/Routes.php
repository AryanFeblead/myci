<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/signup', 'Signup::index');
$routes->post('/store', 'Signup::store');
$routes->get('/login', 'Login::index');
$routes->post('/verifylogin', 'Login::verifylogin');
$routes->get('/dashboard', 'Login::dashboard');
$routes->get('/logout', 'Login::logout');
$routes->set404Override(
    function () {
        echo "Plz enter valid url";
    }
);
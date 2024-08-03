<?php

$routes->group('/auth', function ($routes) {
    $routes->get('/', '\App\Modules\Auth\Controllers\Auth::index');
    $routes->post('sign_in', '\App\Modules\Auth\Controllers\Auth::signInSubmit');
    $routes->get('sign_out', '\App\Modules\Auth\Controllers\Auth::signOut');
});
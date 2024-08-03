<?php

$routes->group('/events', function ($routes) {
    $routes->get('/', '\App\Modules\Events\Controllers\Events::index');
    $routes->get('create', '\App\Modules\Events\Controllers\Events::create');
    $routes->get('(:any)', '\App\Modules\Events\Controllers\Events::edit/$1');

    $routes->post('store', '\App\Modules\Events\Controllers\Events::store');
});

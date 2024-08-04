<?php

$routes->group('/dashboard', function ($routes) {
    $routes->get('/', '\App\Modules\Dashboard\Controllers\Dashboard::index');
});

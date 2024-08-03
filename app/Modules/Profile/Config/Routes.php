<?php

$routes->group('/profile', function ($routes) {
    $routes->get('/', '\App\Modules\Profile\Controllers\Profile::index');
});

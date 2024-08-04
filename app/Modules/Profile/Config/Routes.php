<?php

$routes->group('/profile', function ($routes) {
    $routes->get('/', '\App\Modules\Profile\Controllers\Profile::index');
    $routes->post('editImage', '\App\Modules\Profile\Controllers\Profile::editImage');
    $routes->post('editIdentity', '\App\Modules\Profile\Controllers\Profile::editIdentity');
});

<?php

$routes->group('/events', function ($routes) {
    $routes->get('/', '\App\Modules\Events\Controllers\Events::index');
});

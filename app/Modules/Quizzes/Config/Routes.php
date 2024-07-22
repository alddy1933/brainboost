<?php

$routes->group('/quizzes', function ($routes) {
    $routes->get('/', '\App\Modules\Quizzes\Controllers\Quizzes::index');
    $routes->get('create', '\App\Modules\Quizzes\Controllers\Quizzes::create');
    $routes->get('quiz/(:any)', '\App\Modules\Quizzes\Controllers\Quizzes::quiz/$1');
});

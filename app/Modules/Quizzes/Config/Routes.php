<?php

$routes->group('/quizzes', function ($routes) {
    $routes->get('/', '\App\Modules\Quizzes\Controllers\Quizzes::index');
    $routes->get('create', '\App\Modules\Quizzes\Controllers\Quizzes::create');
    $routes->get('quiz/(:any)', '\App\Modules\Quizzes\Controllers\Quizzes::quiz/$1');

    $routes->post('create', '\App\Modules\Quizzes\Controllers\Quizzes::store');
    $routes->post('generate_result', '\App\Modules\Quizzes\Controllers\Quizzes::generateResult');
});

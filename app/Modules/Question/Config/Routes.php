<?php

$routes->group('/question', function ($routes) {
    $routes->post('generate/(:any)', '\App\Modules\Question\Controllers\Question::generateQuestions/$1');
});

<?php

$routes->group('/question', function ($routes) {
    $routes->post('generate', '\App\Modules\Question\Controllers\Question::generateNewQuestion');
});

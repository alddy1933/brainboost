<?php

namespace App\Modules\Events\Controllers;

use App\Modules\Events\Models\Events_model;

class Events extends \App\Controllers\BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new Events_model();
    }

    public function index()
    {
        $data = [
            'events' => $this->model->getAllEvents()
        ];
        return view('\App\Modules\Events\Views\index', $data);
    }
}

<?php

namespace App\Modules\Profile\Controllers;

use App\Modules\Profile\Models\Profile_model;

class Profile extends \App\Controllers\BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new Profile_model();
    }

    public function index()
    {
        $data = [
            'biodata' => $this->model->getBiodata()
        ];
        return view('\App\Modules\Profile\Views\index', $data);
    }
}

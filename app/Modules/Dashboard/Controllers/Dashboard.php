<?php

namespace App\Modules\Dashboard\Controllers;

class Dashboard extends \App\Controllers\BaseController
{
    public function __construct()
    {
    }

    public function index()
    {
        $data = [];
        return view('\App\Modules\Dashboard\Views\index', $data);
    }
}

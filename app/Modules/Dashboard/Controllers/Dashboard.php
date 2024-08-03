<?php

namespace App\Modules\Dashboard\Controllers;

class Dashboard extends \App\Controllers\BaseController
{
    public function __construct()
    {
        helper(['auth']);
        checkAuth();
    }

    public function index()
    {
        $data = [];
        return view('\App\Modules\Dashboard\Views\index', $data);
    }
}

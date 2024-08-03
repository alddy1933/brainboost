<?php

namespace App\Modules\Dashboard\Controllers;

use App\Modules\Dashboard\Models\Dashboard_model;

use App\Modules\Events\Models\Events_model;

class Dashboard extends \App\Controllers\BaseController
{
    protected $model;
    protected $event;

    public function __construct()
    {
        helper(['auth']);
        checkAuth();
        $this->model = new Dashboard_model();
        $this->event = new Events_model();
    }

    public function index()
    {
        $data = [
            'event' => $this->event->getOnGoingEvent(),
            'leaderboard' => $this->model->getLeaderboard()
        ];
        return view('\App\Modules\Dashboard\Views\index', $data);
    }   
}

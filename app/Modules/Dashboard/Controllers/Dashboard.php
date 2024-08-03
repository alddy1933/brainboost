<?php

namespace App\Modules\Dashboard\Controllers;
use App\Modules\Profile\Models\Profile_model;

use App\Modules\Events\Models\Events_model;

class Dashboard extends \App\Controllers\BaseController
{
    protected $event;

    public function __construct()
    {
        helper(['auth']);
        checkAuth();
        $this->event = new Events_model();
    }

    public function index()
    {
        $data = [
            'event' => $this->event->getOnGoingEvent()
        ];
        return view('\App\Modules\Dashboard\Views\index', $data);
    }
}

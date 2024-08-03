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

    public function create()
    {
        return view('\App\Modules\Events\Views\create');
    }

    public function store()
    {
        $eventName = $this->request->getPost('event_name');
        $pointsUp = $this->request->getPost('points_up');
        $expiredAt = $this->request->getPost('expired_at');
        $publish = $this->request->getPost('publish') ?? 'N';

        $data = [
            'events_name' => $eventName,
            'expired_at' => $expiredAt,
            'points_up' => $pointsUp,
            'publish' => $publish
        ];

        $this->model->insertData($data);

        session()->setFlashdata('success_alert', 'Success creating event !');
        return redirect()->to(base_url('events/create'));
    }
}

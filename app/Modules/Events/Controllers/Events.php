<?php

namespace App\Modules\Events\Controllers;

use App\Modules\Events\Models\Events_model;
use App\Modules\Profile\Models\Profile_model;

class Events extends \App\Controllers\BaseController
{
    protected $model;
    protected $profile;

    public function __construct()
    {
        $this->model = new Events_model();
        $this->profile = new Profile_model();
    }

    public function index()
    {
        $data = [
            'biodata' => $this->profile->getBiodata(session()->get('username')),
            'events' => $this->model->getAllEvents()
        ];
        return view('\App\Modules\Events\Views\index', $data);
    }

    public function create()
    {
        $data = [
            'biodata' => $this->profile->getBiodata(session()->get('username')),
        ];

        return view('\App\Modules\Events\Views\create', $data);
    }

    public function store()
    {
        $id = $this->request->getPost('id');

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

        if ($id != '') {
            $this->model->updateData($data, $id);

            session()->setFlashdata('success_alert', 'Success updating event !');
            return redirect()->to(base_url("events/$id"));
        } else {
            $this->model->insertData($data);

            session()->setFlashdata('success_alert', 'Success creating event !');
            return redirect()->to(base_url('events/create'));
        }
    }

    public function edit($id)
    {
        $row = $this->model->getEventById($id);

        $data = [
            'biodata' => $this->profile->getBiodata(session()->get('username')),
            'row' => $row
        ];

        return view('\App\Modules\Events\Views\create', $data);
    }
}

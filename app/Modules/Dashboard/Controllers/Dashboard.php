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
        $d = $this->model->getRank();
        $rank = 0;
        for($i = 0; $i < count($d); $i++ ){
            if($d[$i]->user_id === session()->get('user_id')){
                $rank = $d[$i]->rank;
            }
        }
        $data = [
            'event' => $this->event->getOnGoingEvent(),
            'leaderboard' => $this->model->getLeaderboard(),
            'stats' => $this->model->getStats(session()->get('user_id')),
            'rank' => $rank,

        ];
        return view('\App\Modules\Dashboard\Views\index', $data);
    }   
}
<?php

namespace App\Modules\Events\Models;

use CodeIgniter\Model;

class Events_model extends Model
{
    public function getAllEvents()
    {
        return db_connect()->table('events')->get()->getResult();
    }

    public function getOnGoingEvent()
    {
        return db_connect()->table('events')
            ->where('publish', 'Y')
            ->get()->getRow() ?? '';
    }
}

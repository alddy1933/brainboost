<?php

namespace App\Modules\Events\Models;

use CodeIgniter\Model;

class Events_model extends Model
{
    protected $db;

    public function __construct()
    {
        $this->db = db_connect()->table('events');
    }

    public function getAllEvents()
    {
        return $this->db->orderBy('events_id', 'desc')->get()->getResult();
    }

    public function getOnGoingEvent()
    {
        return $this->db
            ->where('publish', 'Y')
            ->get()->getRow() ?? '';
    }

    public function insertData($data)
    {
        if ($data['publish'] == 'Y') {
            $this->db->update([
                'publish' => 'N'
            ]);
        }

        return $this->db
            ->insert($data);
    }
}

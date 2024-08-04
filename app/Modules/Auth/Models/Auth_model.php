<?php

namespace App\Modules\Auth\Models;

use CodeIgniter\Model;

class Auth_model extends Model
{
    protected $table = "bb_user";
    protected $status = [
        "ok" => true,
        "err" => false
    ];

    public function getUserExist($username)
    {
        return db_connect()->table($this->table)->where('username', $username)->get()->getRow() ?? '';
    }

    public function insertRegisterUser($data)
    {
        $builder = $this->db->table($this->table);
        $q = $builder->insert($data);

        if(! $q){
            $this->status = [
                "ok" => false,
                "err" => $this->db->error(),
            ];
        }
        return $this->status;

    }
}

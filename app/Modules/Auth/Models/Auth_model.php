<?php

namespace App\Modules\Auth\Models;

use CodeIgniter\Model;

class Auth_model extends Model
{
    public function getUserExist($username)
    {
        return db_connect()->table('bb_user')->where('username', $username)->get()->getRow() ?? '';
    }
}

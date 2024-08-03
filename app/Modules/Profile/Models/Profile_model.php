<?php

namespace App\Modules\Profile\Models;

use CodeIgniter\Model;

class Profile_model extends Model
{
    public function getBiodata()
    {
        return db_connect()->table('bb_user')->where('username', 'arthur_leywin')->get()->getRow();
    }
}

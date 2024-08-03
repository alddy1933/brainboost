<?php

namespace App\Modules\Profile\Models;

use CodeIgniter\Model;

class Profile_model extends Model
{
    public function getBiodata()
    {
        return db_connect()->table('bb_user')->where('username', 'arthur_leywin')->get()->getRow();
    }

    public function getHistory()
    {
        return db_connect()->table('quiz_taken a')
            ->join('category b', 'a.category_id = b.category_id')
            ->where('user_id', session()->get('user_id'))
            ->orderBy('a.quiz_taken_id', 'DESC')
            ->get()
            ->getResult();
    }
}

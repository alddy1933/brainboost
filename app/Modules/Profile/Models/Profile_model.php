<?php

namespace App\Modules\Profile\Models;

use CodeIgniter\Model;

class Profile_model extends Model
{   
    private $userTable = "bb_user";
    protected $status = [
        'ok' => true,
        'err' => null,
    ];

    public function getBiodata($username)
    {
        return db_connect()->table('bb_user')->where('username', $username)->get()->getRow();
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

    public function updateImage($data)
    {
        $builder = $this->db->table($this->userTable);
        $q = $builder->where('username',$data['username'])->set('img',$data['img_name'])->update();
        if(!$q){
            $this->status = [
                'ok' => false,
                'err' => $this->db->error(),
            ];
        }
        return $this->status;
    }

    public function updateIdentity($data,$where)
    {
        $builder = $this->db->table($this->userTable);
        $q = $builder->where('username',$where)->set($data)->update();
        if(!$q){
            $this->status = [
                'ok' => false,
                'err' => $this->db->error(),
            ];
        }
        return $this->status;
    }
}

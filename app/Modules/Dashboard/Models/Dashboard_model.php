<?php

namespace App\Modules\Dashboard\Models;

use CodeIgniter\Model;

class Dashboard_model extends Model
{
    public function getLeaderboard()
    {
        $query = "SELECT 
                ROW_NUMBER() OVER (ORDER BY total DESC) AS rank,
                b.full_name, 
                b.img, 
                SUM(a.score) AS total, 
                COUNT(*) AS quiz_finished 
                FROM quiz_taken a 
                LEFT JOIN bb_user b 
                ON a.user_id = b.user_id 
                GROUP BY a.user_id, b.full_name, b.img 
                ORDER BY total DESC;";

        return db_connect()->query($query)->getResult();
    }

    public function getStats($where)
    {
        $builder = $this->db->table('quiz_taken');
        $data['quiz_taken'] = $builder->where('user_id',$where)->get()->getNumRows();

        $builder = $this->db->table('question_taken');
        $data['question_taken'] = $builder->where('user_id',$where)->get()->getNumRows();
        
        return $data;
    }
    public function getRank()
    {
        $query = "SELECT ROW_NUMBER() OVER (ORDER BY total DESC) AS rank, b.user_id, b.full_name, SUM(a.score) AS total, COUNT(*) AS quiz_finished FROM quiz_taken a LEFT JOIN bb_user b ON a.user_id = b.user_id GROUP BY a.user_id, b.full_name, b.img ORDER BY total DESC;";
        return db_connect()->query($query)->getResult();
    }
}

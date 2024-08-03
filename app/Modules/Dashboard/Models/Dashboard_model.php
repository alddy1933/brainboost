<?php

namespace App\Modules\Dashboard\Models;

use CodeIgniter\Model;

class Dashboard_model extends Model
{
    public function getLeaderboard()
    {
        $query = "SELECT 
                    b.full_name,
                    b.img,
                    SUM(score) AS total,
                    COUNT(*) AS quiz_finished
                    FROM 
                    quiz_taken a
                    LEFT JOIN bb_user b ON a.user_id = b.user_id
                    GROUP BY a.user_id 
                    ORDER BY total DESC";

        return db_connect()->query($query)->getResult();
    }
}

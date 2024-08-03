<?php

namespace App\Modules\Category\Models;

use CodeIgniter\Model;

class Category_model extends Model
{

    public function getAllCategory()
    {
        return db_connect()->table('category')->get()->getResult();
    }
}

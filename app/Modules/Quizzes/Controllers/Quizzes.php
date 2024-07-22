<?php

namespace App\Modules\Quizzes\Controllers;

use App\Modules\Category\Models\Category_model;

class Quizzes extends \App\Controllers\BaseController
{
    private $category;

    public function __construct()
    {
        $this->category = new Category_model();
    }

    public function index()
    {
        $data = [
            "category" => $this->category->getAllCategory()
        ];
        return view('\App\Modules\Quizzes\Views\index', $data);
    }

    public function create()
    {
        $data = [
            "category" => $this->category->getAllCategory()
        ];
        return view('\App\Modules\Quizzes\Views\create', $data);
    }

    public function quiz($category)
    {
        $data = [];
        return view('\App\Modules\Quizzes\Views\quiz', $data);
    }
}

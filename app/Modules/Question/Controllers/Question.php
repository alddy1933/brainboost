<?php

namespace App\Modules\Question\Controllers;

use App\Modules\Question\Models\Question_model;

class Question extends \App\Controllers\BaseController
{
    private $question;

    public function __construct()
    {
        $this->question = new Question_model();
    }

    public function generateQuestions($category)
    {
        $question = $this->question->getQuestions($category);
        return json_encode($question);
    }
}

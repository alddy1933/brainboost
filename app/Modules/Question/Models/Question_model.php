<?php

namespace App\Modules\Question\Models;

use CodeIgniter\Model;

class Question_model extends Model
{

    public function getQuestions($category)
    {
        $questions = db_connect()
            ->table('quiz_question a')
            ->join('quiz_answer b', 'a.question_id = b.question_id')
            ->join('category c', 'a.category_id = c.category_id')
            ->select('a.question_id, a.content as question, b.answer_id, b.content as answer_option, a.img')
            ->where('c.slug', $category)
            ->get()
            ->getResult();

        return $questions;
    }
}

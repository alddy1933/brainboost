<?php

namespace App\Modules\Question\Models;

use CodeIgniter\Model;

class Question_model extends Model
{

    public function getQuestions($category)
    {
        $taken_questions_query = db_connect()->table('question_taken')
            ->where('user_id', session()->get('user_id'))->get()->getResult();

        $question_ids = [];

        foreach ($taken_questions_query as $row) {
            $question_ids[] = $row->question_id;
        }

        $questions = db_connect()
            ->table('quiz_question a')
            ->join('quiz_answer b', 'a.question_id = b.question_id')
            ->join('category c', 'a.category_id = c.category_id')
            ->select('a.question_id, a.content as question, b.answer_id, b.content as answer_option, a.img')
            ->where('c.slug', $category)
            ->where('a.user_id !=', session()->get('user_id'))
            ->whereNotIn('a.question_id', $question_ids)
            ->get()
            ->getResult();

        return $questions;
    }
}

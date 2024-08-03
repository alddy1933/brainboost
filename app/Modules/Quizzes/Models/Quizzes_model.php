<?php

namespace App\Modules\Quizzes\Models;

use CodeIgniter\Model;

class Quizzes_model extends Model
{
    public function insertQuestion($data)
    {
        db_connect()->table('quiz_question')->insert($data);
        return db_connect()->insertID();
    }

    public function insertAnswer($data)
    {
        db_connect()->table('quiz_answer')->insertBatch($data);
        return db_connect()->insertID();
    }

    public function getPoint($data)
    {
        $placeholder = $this->_getPointsUp();

        $point = db_connect()->table('quiz_answer')
            ->where([
                'question_id' => $data->question_id,
                'answer_id' => $data->answer_id,
                'is_correct' => 'Y'
            ])->countAllResults() > 0 ? 1 : 0;

        return $placeholder * $point;
    }

    public function insertTaken($points, $category)
    {
        db_connect()->table('quiz_taken')
            ->insert([
                'user_id' => session()->get('user_id'),
                'category_id' => $this->_getCategoryid($category),
                'score' => $points,
                'date_taken' => date('Y-m-d')
            ]);
    }

    public function insertTakenQuestion($data)
    {
        db_connect()->table('question_taken')->insert([
            'user_id' => session()->get('user_id'),
            'question_id' => $data->question_id,
        ]);
    }

    private function _getCategoryId($category)
    {
        return db_connect()->table('category')
            ->where('slug', $category)->get()->getRow()->category_id ?? '';
    }

    private function _getPointsUp()
    {
        return db_connect()->table('events')
            ->where([
                'publish' => 'Y'
            ])
            ->get()->getRow()
            ->points_up ?? 1;
    }
}

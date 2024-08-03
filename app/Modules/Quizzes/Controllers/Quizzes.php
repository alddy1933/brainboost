<?php

namespace App\Modules\Quizzes\Controllers;

use App\Modules\Category\Models\Category_model;
use App\Modules\Events\Models\Events_model;
use App\Modules\Quizzes\Models\Quizzes_model;

class Quizzes extends \App\Controllers\BaseController
{
    private $model;
    private $category;
    private $event;

    public function __construct()
    {
        $this->model = new Quizzes_model();
        $this->category = new Category_model();
        $this->event = new Events_model();
    }

    public function index()
    {
        $data = [
            "category" => $this->category->getAllCategory(),
            'event' => $this->event->getOnGoingEvent()
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
        $data = [
            'category' => $category
        ];
        return view('\App\Modules\Quizzes\Views\quiz', $data);
    }

    public function store()
    {
        try {
            $image = $this->request->getFile('image');

            $categoryId = $this->request->getPost('category');
            $userId = session()->get('user_id');
            $content = $this->request->getPost('question');

            $questionData = [
                'category_id' => $categoryId,
                'user_id' => $userId,
                'content' => $content
            ];

            if ($image != '') {
                if (!is_dir("image_questions/")) {
                    mkdir("image_questions/", 0777, true);
                }
                $randomName = $image->getRandomName();
                $image->move("image_questions/", $randomName);
                $questionData['img'] = $randomName;
            }

            $lastInsertId = $this->model->insertQuestion($questionData);

            $answerData = [];
            for ($i = 1; $i <= 4; $i++) {
                $answerData[] = [
                    'question_id' => $lastInsertId,
                    'content' => $this->request->getPost("answer_option_$i"),
                    'is_correct' => $this->request->getPost("option_$i" . "_correctness") ?? 'N',
                ];
            }

            $this->model->insertAnswer($answerData);

            session()->setFlashdata('success_alert', 'Success creating question');
            return redirect()->to(base_url('quizzes/create'));
        } catch (\Throwable $th) {
            session()->setFlashdata('error_alert', 'Fail to create question. ' . $th->getMessage());
            return redirect()->to(base_url('quizzes/create'));
        }
    }

    public function generateResult()
    {
        try {
            $data = $this->request->getPost('data');
            $category = $this->request->getPost('category');

            $points = 0;

            if ($data != '') {
                foreach ($data as $row) {
                    $points += $this->model->getPoint((object)$row);
                }
            }

            $this->model->insertTaken($points, $category);

            return json_encode([
                'success' => true,
                'data' => [
                    'points' => $points
                ]
            ]);
        } catch (\Throwable $th) {
            return json_encode([
                'success' => false,
                'message' => $th->getMessage()
            ]);
        }
    }
}

<?php

namespace App\Modules\Question\Models;

use CodeIgniter\Model;

class Question_model extends Model
{

    public function getNewQuestion()
    {
        $questions =  [
            (object)[
                "id" => 1,
                "question" => "How many players are on a soccer team on the field at once?",
                "answer_options" => [
                    "11 players on each team, making a total of 22 players on the field",
                    "12 players on each team, making a total of 24 players on the field",
                    "10 players on each team, making a total of 20 players on the field",
                    "9 players on each team, making a total of 18 players on the field"
                ]
            ],
            (object)[
                "id" => 2,
                "question" => "In which sport is the term 'home run' used?",
                "answer_options" => [
                    "Home run is a term used in baseball",
                    "Home run is a term used in cricket",
                    "Home run is a term used in basketball",
                    "Home run is a term used in soccer"
                ]
            ],
            (object)[
                "id" => 3,
                "question" => "What is the length of an Olympic swimming pool?",
                "answer_options" => [
                    "An Olympic swimming pool is 50 meters long",
                    "An Olympic swimming pool is 25 meters long",
                    "An Olympic swimming pool is 100 meters long",
                    "An Olympic swimming pool is 75 meters long"
                ]
            ],
            (object)[
                "id" => 4,
                "question" => "Which country won the first FIFA World Cup?",
                "answer_options" => [
                    "Uruguay won the first FIFA World Cup in 1930",
                    "Brazil won the first FIFA World Cup in 1930",
                    "Germany won the first FIFA World Cup in 1930",
                    "Argentina won the first FIFA World Cup in 1930"
                ]
            ],
            (object)[
                "id" => 5,
                "question" => "In tennis, what is the term for a score of 40-40?",
                "answer_options" => [
                    "A score of 40-40 in tennis is called deuce",
                    "A score of 40-40 in tennis is called advantage",
                    "A score of 40-40 in tennis is called break point",
                    "A score of 40-40 in tennis is called set point"
                ]
            ],
            (object)[
                "id" => 6,
                "question" => "How long is a marathon race?",
                "answer_options" => [
                    "A marathon race is 42.195 kilometers long",
                    "A marathon race is 26.2 kilometers long",
                    "A marathon race is 50 kilometers long",
                    "A marathon race is 21.1 kilometers long"
                ]
            ],
            (object)[
                "id" => 7,
                "question" => "In basketball, how many points is a free throw worth?",
                "answer_options" => [
                    "A free throw in basketball is worth 1 point",
                    "A free throw in basketball is worth 2 points",
                    "A free throw in basketball is worth 3 points",
                    "A free throw in basketball is worth 0 points"
                ]
            ],
            (object)[
                "id" => 8,
                "question" => "Which sport uses the term 'love' for a score of zero?",
                "answer_options" => [
                    "The term 'love' for a score of zero is used in tennis",
                    "The term 'love' for a score of zero is used in badminton",
                    "The term 'love' for a score of zero is used in squash",
                    "The term 'love' for a score of zero is used in table tennis"
                ]
            ],
            (object)[
                "id" => 9,
                "question" => "In which sport can you score a touchdown?",
                "answer_options" => [
                    "A touchdown can be scored in American football",
                    "A touchdown can be scored in rugby",
                    "A touchdown can be scored in soccer",
                    "A touchdown can be scored in basketball"
                ]
            ],
            (object)[
                "id" => 10,
                "question" => "Which sport is known as 'the beautiful game'?",
                "answer_options" => [
                    "'The beautiful game' is a nickname for soccer",
                    "'The beautiful game' is a nickname for basketball",
                    "'The beautiful game' is a nickname for baseball",
                    "'The beautiful game' is a nickname for tennis"
                ]
            ],
        ];

        return $questions[rand(0, count($questions) - 1)];
    }
}

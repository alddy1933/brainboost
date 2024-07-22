<?php

namespace App\Modules\Category\Models;

use CodeIgniter\Model;

class Category_model extends Model
{

    public function getAllCategory()
    {
        return [
            (object)[
                "id" => 1,
                "name" => "Sport",
                "slug" => "sport",
                "icon" => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-bike"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M5 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /><path d="M19 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /><path d="M12 19l0 -4l-3 -3l5 -4l2 3l3 0" /><path d="M17 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /></svg>',
                "icon_bg_colour" => "#d63939"
            ],
            (object)[
                "id" => 2,
                "name" => "Music",
                "slug" => "music",
                "icon" => '<svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-music"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 17a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /><path d="M13 17a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /><path d="M9 17v-13h10v13" /><path d="M9 8h10" /></svg>',
                "icon_bg_colour" => "#ae3ec9"
            ],
            (object)[
                "id" => 3,
                "name" => "Nature",
                "slug" => "nature",
                "icon" => '<svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-leaf"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 21c.5 -4.5 2.5 -8 7 -10" /><path d="M9 18c6.218 0 10.5 -3.288 11 -12v-2h-4.014c-9 0 -11.986 4 -12 9c0 1 0 3 2 5h3z" /></svg>',
                "icon_bg_colour" => "#0ca678"
            ],
            (object)[
                "id" => 4,
                "name" => "History",
                "slug" => "history",
                "icon" => '<svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-building-monument"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 18l2 -13l2 -2l2 2l2 13" /><path d="M5 21v-3h14v3" /><path d="M3 21l18 0" /></svg>',
                "icon_bg_colour" => "#d6336c"
            ],
            (object)[
                "id" => 5,
                "name" => "Geography",
                "slug" => "geography",
                "icon" => '<svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-world"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" /><path d="M3.6 9h16.8" /><path d="M3.6 15h16.8" /><path d="M11.5 3a17 17 0 0 0 0 18" /><path d="M12.5 3a17 17 0 0 1 0 18" /></svg>',
                "icon_bg_colour" => "#4263eb"
            ],
            (object)[
                "id" => 6,
                "name" => "Math",
                "slug" => "math",
                "icon" => '<svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-math"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19 5h-7l-4 14l-3 -6h-2" /><path d="M14 13l6 6" /><path d="M14 19l6 -6" /></svg>',
                "icon_bg_colour" => "#f59f00"
            ],
        ];
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class NewsController extends BaseController
{
    private  $news = [
        1 => [
            'title' =>'news 1'
        ],
        2 => [
            'title' =>'news 2'
        ]
    ];
    public function index() {
        $response = '';
        foreach ($this ->news as $id => $item) {
            $url = route('news::card', ['id' => $id]); // хелпер роут, у которого второй аргумент  = id в виде массива
            $response .= "<div>
                <a href='{$url}'>
                    {$item['title']}

            </div>
            ";
        }
        return $response;
    }
    public function  card($id) {

        dd(route('news::catalog')); //хелпер роут по алиасу составляет правильный URL

        $news = $this->news[$id];
        return $news['title'];
    }
}

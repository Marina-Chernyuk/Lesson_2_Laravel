<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   private string $title = 'Главная страница';
    private array $listCategory = [
        [
            'nameCategory' => 'Детские новости',
            'partition' => 'для детей',
        ],
        [
            'nameCategory' => 'Мир науки',
            'partition' => 'для взрослых',
        ],
[
            'nameCategory' => 'Авто-, мото',
            'partition' => 'для мужчин',
        ],
        [
            'nameCategory' => 'Мировые новости',
            'partition' => 'для всех',
        ]
    ];
    private array $oneCategory = [
        'nameCategory' => 'Спорт и отдых',
        'partition' => 'для всех',
    ];

    public function index()
    {
        return view('index', [
            'title' => $this->title,
            'listCategory' => $this->listCategory,
            'oneCategory' => $this->oneCategory,
        ]);
}

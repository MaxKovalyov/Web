<?php

namespace application\controllers;

use application\core\Controller;
use application\models\Statistic;

class MainController extends Controller
{

    private $title = 'Главная страница';

    public function indexAction() {

        $statistic = new Statistic();
        $statistic->saveStatistic($this->title);

        $vars = [
            'name' => 'Максим',
            'age' => 20,
        ];
        $this->view->render($this->title, $vars);
    }


}
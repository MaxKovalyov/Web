<?php

namespace application\controllers;

use application\core\Controller;
use application\models\Statistic;
class AboutController extends Controller
{
    private $title = 'Обо мне';

    public function indexAction() {

        $statistic = new Statistic();
        $statistic->saveStatistic($this->title);

        $this->view->render($this->title);
    }


}
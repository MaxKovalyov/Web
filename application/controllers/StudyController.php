<?php

namespace application\controllers;

use application\core\Controller;
use application\models\Statistic;

class StudyController extends Controller
{
    private $title = 'Учёба';

    public function indexAction() {

        $statistic = new Statistic();
        $statistic->saveStatistic($this->title);

        $this->view->render($this->title);
    }


}
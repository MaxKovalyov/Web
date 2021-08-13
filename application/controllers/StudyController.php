<?php

namespace application\controllers;

use application\core\Controller;
use application\models\StatisticModel;

class StudyController extends Controller
{
    private $title = 'Учёба';

    public function indexAction() {

        $statistic = new StatisticModel();
        $statistic->saveStatistic($this->title);

        $this->view->render($this->title);
    }


}
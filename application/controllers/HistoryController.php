<?php

namespace application\controllers;

use application\core\Controller;
use application\models\StatisticModel;

class HistoryController extends Controller
{

    private $title = 'История посещений';

    public function indexAction() {

        $statistic = new StatisticModel();
        $statistic->saveStatistic($this->title);

        $this->view->render($this->title);
    }


}
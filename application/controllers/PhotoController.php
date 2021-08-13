<?php

namespace application\controllers;

use application\core\Controller;
use application\models\StatisticModel;

class PhotoController extends Controller
{
    private $title = 'Фотоальбом';

    public function indexAction() {

        $statistic = new StatisticModel();
        $statistic->saveStatistic($this->title);

        $this->view->render($this->title, TITLES);
    }
    
}
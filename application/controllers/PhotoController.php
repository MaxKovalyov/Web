<?php

namespace application\controllers;

use application\core\Controller;
use application\models\Statistic;

class PhotoController extends Controller
{
    private $title = 'Фотоальбом';

    public function indexAction() {

        $statistic = new Statistic();
        $statistic->saveStatistic($this->title);

        $this->view->render($this->title, TITLES);
    }
    
}
<?php

namespace application\controllers;

use application\core\Controller;
use application\models\Statistic;

class InterestsController extends Controller
{
    private $title = 'Мои интересы';

    public function indexAction() {

        $statistic = new Statistic();
        $statistic->saveStatistic($this->title);

        $this->view->render($this->title, TITLES, ANCHORS, LISTS);
    }


}
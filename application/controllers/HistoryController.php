<?php

namespace application\controllers;

use application\core\Controller;

class HistoryController extends Controller
{

    public function indexAction() {
        $this->view->render('История посещений');
    }


}
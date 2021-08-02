<?php

namespace application\controllers;

use application\core\Controller;

class StudyController extends Controller
{

    public function indexAction() {
        $this->view->render('Учёба');
    }


}
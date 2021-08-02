<?php

namespace application\controllers;

use application\core\Controller;

class InterestsController extends Controller
{

    public function indexAction() {
        $this->view->render('Мои интересы', TITLES, ANCHORS, LISTS);
    }


}
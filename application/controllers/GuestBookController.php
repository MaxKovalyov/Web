<?php

namespace application\controllers;

use application\core\Controller;

class GuestBookController extends Controller
{

    public function indexAction() {
        $this->view->render('Гостевая книга');
    }


}
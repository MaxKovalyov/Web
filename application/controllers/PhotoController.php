<?php

namespace application\controllers;

use application\core\Controller;

class PhotoController extends Controller
{

    public function indexAction() {
        $this->view->render('Фотоальбом',TITLES);
    }
    
}
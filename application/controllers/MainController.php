<?php

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller
{

    public function indexAction() {
        $vars = [
            'name' => 'Максим',
            'age' => 20,
        ];
        $this->view->render('Главная страница',$vars);
    }


}
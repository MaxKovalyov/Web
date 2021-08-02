<?php

namespace application\controllers;

use application\core\Controller;
use application\models\validators\TestValidator;

class TestController extends Controller
{

    public function indexAction() {
        $this->view->render('Тест по дисциплине');
    }

    public function validationAction() {
        $formData = $_POST;
        //debug($_POST);
        $validator = new TestValidator($formData);
        $errors = $validator->validate();
        //$this->view->render('Контакты');
        if($errors) {
            $vars = [
                'errors' => $errors,
            ];
            $this->view->render('Валидация',$vars);
        } else {
            $results = $validator->checkTest();
            if($results) {
                $vars = [
                    'results' => $results,
                ];
                $this->view->path = 'test/results';
                $this->view->render('Результаты теста',$vars);
            }
        }
    }


}
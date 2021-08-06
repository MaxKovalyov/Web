<?php

namespace application\controllers;

use application\core\Controller;
use application\models\validators\TestValidator;

class TestController extends Controller
{

    private $errors = [];

    private $data = [];

    public function indexAction() {
        $vars = [
            'errors' => $this->errors,
            'data' => $this->data,
        ];
        $this->view->render('Тест по дисциплине',$vars);
    }

    public function validationAction() {
        $this->data = $_POST;
        $validator = new TestValidator($this->data);
        $this->errors = $validator->validate();
        if($this->errors) {
            $this->view->path = "test/index";
            $this->indexAction();
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
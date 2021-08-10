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
        //debug($this->data);
        $validator = new TestValidator($this->data);
        $this->errors = $validator->validate();
        if($this->errors) {
            $this->view->path = "test/index";
            $this->indexAction();
        } else {
            $results = $validator->checkTest();
            $this->model->date = date("Y-m-d");
            $this->model->fio = $_POST["fio"];
            $this->model->group = $_POST["selectGroup"][0];
            $this->model->question1 = $_POST["number"];
            foreach($_POST["checkbox"] as $key => $value) {
                $this->model->question2 = $this->model->question2.$value;
            }
            $this->model->question3 = $_POST["select"][0];
            $this->model->answer1 = $results["answer1"];
            $this->model->answer2 = $results["answer2"];
            $this->model->answer3 = $results["answer3"];
            $this->model->save();
            header("Location: index");
            exit();
        }
    }


}
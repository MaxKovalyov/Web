<?php

namespace application\controllers;

use application\core\Controller;
use application\models\validators\BlogValidator;

class BlogEditorController extends Controller
{

    private $errors = [];

    private $data = [];

    private $allData = [];

    public function indexAction() {

        if(array_key_exists('title', $_POST)) {
            $this->data = $_POST;
            $validator = new BlogValidator($this->data);
            $this->errors = $validator->validate();
            if(!$this->errors) {
                $this->model->date = date("Y-m-d");
                $this->model->title = $_POST["title"];
                $this->model->img = "public/files/".$_POST["img"];
                $this->model->message = $_POST["message"];
                $this->model->save();
                $this->data = [];
            }
        }

        $this->allData = $this->model->findAll();

        $vars = [
            'errors' => $this->errors,
            'data' => $this->data,
            'allData' => $this->allData,
        ];

        $this->view->render('Редактор блога', $vars);
    }


}
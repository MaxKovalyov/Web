<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\FileManager;
use application\models\validators\ContactValidator;

class ContactController extends Controller
{
    private $errors = [];
    private $data = [
        'date' => "dd.month.yyyy",
    ];

    public function validationAction() {
        $this->data = $_POST;
        $validator = new ContactValidator($this->data);
        $this->errors = $validator->validate();
        if($this->errors) {
            $this->view->path = "contact/index";
            $this->indexAction();
        } else {
            header("Location: index");
            exit();
        }
    }

    public function indexAction() {
        $vars = [
            'errors' => $this->errors,
            'data' => $this->data,
        ];
        $this->view->render('Контакты',$vars);
    }


}
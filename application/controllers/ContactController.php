<?php

namespace application\controllers;

use application\core\Controller;
use application\models\validators\ContactValidator;

class ContactController extends Controller
{

    public function validationAction() {
        $formData = $_POST;
        //debug($_POST);
        $validator = new ContactValidator($formData);
        $errors = $validator->validate();
        //$this->view->render('Контакты');
        if($errors) {
            $vars = [
                'errors' => $errors,
            ];
            $this->view->render('Валидация',$vars);
        } else {
            $this->view->path = 'contact/index';
            $this->view->render('Контакты');
        }
        
    }

    public function indexAction() {
        $this->view->render('Контакты');
    }


}
<?php

namespace application\controllers;

use application\core\Controller;

class RegistrationController extends Controller
{
    private $title = 'Регистрация пользователя';

    private $data = [];
    private $error;

    public function indexAction() {

        if(array_key_exists('login', $_POST)) {
            if(!$this->model->find($_POST["login"])) {
                $this->model->fio = $_POST["fio"];
                $this->model->email = $_POST["email"];
                $this->model->login = $_POST["login"];
                $this->model->password = $_POST["password"];
                $this->model->save();
                $_SESSION["login"] = $_POST["login"];
                $_SESSION["password"] = $_POST["password"];
                $_SESSION["fio"] = $_POST["fio"];
                $_SESSION["email"] = $_POST["email"];
                header('Location:/main/index');
                exit;
            } else {
                $this->error = "Пользователь с таким логином уже существует!";
                $this->data = $_POST;
            }
        }

        $vars = [
            'data' => $this->data,
            'error' => $this->error,
        ];

        $this->view->force_render('application/views/'.$this->route[0].'/'.$this->route[1].'.php',$this->title,'form.php',$vars);
    }

    public function checkLoginAction() {
        $login = htmlspecialchars($_POST["login"]);
        echo $this->model->find($login);
    }


}
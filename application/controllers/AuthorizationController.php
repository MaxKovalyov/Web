<?php

namespace application\controllers;

use application\core\Controller;
use application\models\Registration;

class AuthorizationController extends Controller
{
    private $title = 'Авторизация пользователя';
    private $error;

    public function indexAction() {

        $this->model = new Registration();

        if(array_key_exists('login', $_POST)) {
            $data = $this->model->find($_POST["login"]);
            if($data) {
                if($data->password == $_POST["password"]) {
                    $_SESSION["login"] = $_POST["login"];
                    $_SESSION["password"] = $_POST["password"];
                    $_SESSION["fio"] = $data->fio;
                    $_SESSION["email"] = $data->email;
                    header('Location:/main/index');
                    exit;
                } else {
                    $this->error = "Неверно введён логин или пароль!";
                }
            } else {
                $this->error = "Неверно введён логин или пароль!";
            }
        }

        $vars = [
            'error' => $this->error,
        ];

        $this->view->force_render('application/views/'.$this->route[0].'/'.$this->route[1].'.php',$this->title,'form.php',$vars);
    }

    public function logOutAction() {
        session_destroy();
        header('Location:/main/index');
        exit;
    }


}
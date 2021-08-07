<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\FileManager;

class GuestBookController extends Controller
{
    private $nameFile = "messages.inc";


    public function indexAction() {

        $file = new FileManager($this->nameFile, "a+");
        if((array_key_exists('name', $_POST)) && (!empty($_POST["name"]))) {
            //debug($_POST);
            $name = $_POST["name"];
            $surname = $_POST["surname"];
            $patronymic = $_POST["patronymic"];
            $email = $_POST["email"];
            $message = $_POST["message"];
            $date = date("d-m-Y");
            $str = "$date;$name;$surname;$patronymic;$email;$message;\n";
            //debug($str);
            $file->write($str);
        }

        $data = [];
        $content = $file->read();
        if(!empty($content)) {
            foreach($content as $key => $value) {
                $data[$key] = explode(';',$value);
            }
        }
        //debug($data);
        $vars = [
            'data' => $data,
        ];

        $this->view->render('Гостевая книга',$vars);
    }


}
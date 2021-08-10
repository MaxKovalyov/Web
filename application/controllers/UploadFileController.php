<?php

namespace application\controllers;

use application\core\Controller;

class UploadFileController extends Controller
{

    public function indexAction() {

        if(!empty($_FILES["messages"])) {
            $source = $_FILES["messages"]["tmp_name"];
            $dest = "public/files/".$_FILES["messages"]["name"];
            move_uploaded_file($source, $dest);
        }


        $this->view->render('Загрузка файла');
    }


}
<?php

namespace application\admin\controllers;

use application\core\Controller;

class AdminUploadFileController extends Controller
{

    public function indexAction() {

        if(!empty($_FILES["messages"])) {
            $source = $_FILES["messages"]["tmp_name"];
            $dest = "public/files/".$_FILES["messages"]["name"];
            move_uploaded_file($source, $dest);
        }


        $this->view->admin_render('admin_uploadBook.php','Загрузка файла',ucfirst($this->route[0]));
    }


}
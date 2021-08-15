<?php

namespace application\admin\controllers;

use application\core\Controller;

class AdminAuthorizationController extends Controller
{

    public function logOutAction() {
        
        unset($_SESSION['isAdmin']);

        header('Location:/main/index');
        exit;

    }

    public function indexAction() {

        if ((@$_POST['login']=='admin') && (md5(@$_POST['password'])=="0192023a7bbd73250516f069df18b500")) {
            $_SESSION['isAdmin']=1;
            header('Location:/blogEditor/index?admin_area=1');
            exit;
        } else {
            $_SESSION['isAdmin']=0;
        }

        $this->view->admin_render('admin_authorization.php','Авторизация админа',ucfirst($this->route[0]),'admin_layout.php');
    }


}
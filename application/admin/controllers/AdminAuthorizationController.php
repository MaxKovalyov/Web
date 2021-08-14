<?php

namespace application\admin\controllers;

use application\core\Controller;

class AdminAuthorizationController extends Controller
{

    public function indexAction() {

        if ((@$_POST['login']=='admin') && (md5(@$_POST['password'])=="0192023a7bbd73250516f069df18b500")) {
            $_SESSION['isAdmin']=1;
        } else {
            $_SESSION['isAdmin']=0;
        }

        $this->view->admin_render('admin_authorization.php','Авторизация',ucfirst($this->route[0]),'admin_layout.php');
    }


}
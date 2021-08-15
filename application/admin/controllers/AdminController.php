<?php

namespace application\admin\controllers;

use application\core\Controller;

class AdminController extends Controller
{

    function authenticate(){
        if (!isset($_SESSION['isAdmin']) || $_SESSION["isAdmin"] != 1) {
            header('Location:/authorization/index?admin_area=1');
            exit;
        }
    }


}
<?php

namespace application\core;

class Router 
{
    static function route() {
        $url = trim($_SERVER['REQUEST_URI'], '/');
        $route = explode('/',$url);
        $str = strpos($route[1],"?");
        if($str) {
            $route[1] = substr($route[1],0,$str);  
        }
        if(@$_REQUEST['admin_area']) {
            $admin_path = 'admin\\';
            $admin_class_prefix = 'Admin';
        } else {
            $admin_path = '';
            $admin_class_prefix = '';
        }
        $controller_name = $route[0];
        $action_name = $route[1];
        $controller_class = "application\\${admin_path}controllers\\".$admin_class_prefix.ucfirst($controller_name).'Controller';
        if(class_exists($controller_class)) {
            $controller = new $controller_class($route);
        } else {
            die("Ошибка! Контроллер $controller_class не найден!");
        }

        $model_name = ucfirst($controller_name);
        $model_class = "application\models\\".$model_name;
        if(class_exists($model_class)) {
            $model = new $model_class;
        } else {
            die("ОШИБКА! Модель $model_class не найдена");
        }
        $controller->model = $model;
        
        $action = $action_name.'Action';
        if(method_exists($controller,$action)) {
            $controller->$action();
        } else {
            die("ОШИБКА! Отсутствует метод $action_name контроллера $controller_class");
        }
    }
}
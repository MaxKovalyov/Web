<?php

namespace application\core;

class Router 
{
    protected $routes = [];
    protected $params = [];  

    function __construct() {
        $arr = require 'application/config/routes.php';
        foreach($arr as $key => $val) {
            $this->add($key, $val);
        }
    }

    /**
     * Создание пути
     */
    public function add($route, $params) {
        $route = '#^'.$route.'$#';
        $this->routes[$route] = $params;
        //debug($this->routes);
    }

    /**
     * Проверка на существование пути
     */
    public function match() {
        $url = trim($_SERVER['REQUEST_URI'], '/');
        foreach($this->routes as $route => $params) {
            if(preg_match($route, $url, $matches)) {
                $this->params = $params;
                return true;
            }
        }
        return false;
    }
    
    /**
     * Проверка на существование классов и методов и создание объектов соответствующих классов, вызов экшена
     */
    public function run() {
        if($this->match()) {
            $path = 'application\controllers\\'.ucfirst($this->params['controller']).'Controller';
            //debug($path);
            if(class_exists($path)) {
                $action = $this->params['action'].'Action';
                if(method_exists($path, $action)) {
                    $controller = new $path($this->params);
                    $controller->$action();
                } else {
                    View::errorCode(403);
                }
            } else {
                View::errorCode(403);
            }
        } else {
            View::errorCode(404);
        }
    }


}
<?php

namespace application\core;

class View 
{
    public $route;
    public $path;
    public $layout = 'default';

    public function __construct($route) {
        $this->route = $route;
        $this->path = $route[0].'/'.$route[1];
    }

    public function render($title, $vars = []) {
        extract($vars);
        if(file_exists('application/views/'.$this->path.'.php')) {
            ob_start();
            require 'application/views/'.$this->path.'.php';
            $content = ob_get_clean();
            $name = ucfirst($this->route[0]);
            require 'application/views/layouts/'.$this->layout.'.php';
        }     
    }

    public function admin_render($content_view, $title, $name, $layout = 'admin_layout.php', $vars = []) {

        extract($vars);

        include 'application/admin/views/'.$layout;
        
    }
}
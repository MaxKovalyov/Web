<?php

namespace application\admin\controllers;

use application\core\Controller;
use application\models\validators\BlogValidator;

class AdminBlogEditorController extends Controller {
    
    private $errors = [];

    private $data = [];

    private $allData = [];

    public function indexAction() {
        
        if(array_key_exists('title', $_POST)) {
            $this->data = $_POST;
            $this->data["img"] = $_FILES["img"]["name"];
            $validator = new BlogValidator($this->data);
            $this->errors = $validator->validate();
            if(!$this->errors) {
                $source = $_FILES["img"]["tmp_name"];
                $dest = "public/files/".$_FILES["img"]["name"];
                move_uploaded_file($source, $dest);
                $this->model->date = date("Y-m-d H:i:s");
                $this->model->title = $_POST["title"];
                $this->model->img = "public/files/".$_FILES["img"]["name"];
                $this->model->message = $_POST["message"];
                $this->model->autor = 'none';
                $this->model->save();
                $this->data = [];
            }
        }

        $per_page = 5;
        $page = (int)(isset($_GET['page'])?($_GET['page']-1):0);
        $start = abs($page*$per_page);
        $this->allData = $this->model->findSome($start, $per_page);

        $total_rows = $this->model->getCountRecords();

        $num_pages = ceil($total_rows/$per_page);

        $vars = [
            'errors' => $this->errors,
            'data' => $this->data,
            'allData' => $this->allData,
            'num_pages' => $num_pages,
            'page' => $page,
        ];


        $this->view->admin_render('admin_blogEditor.php', 'Редактор блога', ucfirst($this->route[0]),'admin_layout.php', $vars);

    }

}
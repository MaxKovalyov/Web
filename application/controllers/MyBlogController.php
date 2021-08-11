<?php

namespace application\controllers;

use application\core\Controller;

class MyBlogController extends Controller
{

    public function indexAction() {

        $per_page = 2;
        $page = (int)(isset($_GET['page'])?($_GET['page']-1):0);
        $start = abs($page*$per_page);
        $data = $this->model->findSome($start, $per_page);

        $total_rows = $this->model->getCountRecords();

        $num_pages = ceil($total_rows/$per_page);


        $vars = [
            'data' => $data,
            'num_pages' => $num_pages,
            'page' => $page,
        ];

        $this->view->render('Мой блог',$vars);
    }


}
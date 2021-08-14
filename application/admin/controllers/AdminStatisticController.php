<?php

namespace application\admin\controllers;

use application\admin\controllers\AdminController;

class AdminStatisticController extends AdminController
{

    public function indexAction() {

        $per_page = 10;
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

        $this->view->admin_render('admin_statistic.php','Статистика посещений',ucfirst($this->route[0]),'admin_layout.php',$vars);
    }


}
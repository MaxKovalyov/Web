<?php

namespace application\controllers;

use application\core\Controller;
use application\models\StatisticModel;

class MyBlogController extends Controller
{
    private $title = 'Мой блог';

    public function indexAction() {

        $statistic = new StatisticModel();
        $statistic->saveStatistic($this->title);

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

        $this->view->render($this->title, $vars);
    }


}
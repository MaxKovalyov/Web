<?php

namespace application\controllers;

use application\core\Controller;
use application\models\Statistic;
use application\models\Comment;

class MyBlogController extends Controller
{
    private $title = 'Мой блог';

    public function indexAction() {

        $statistic = new Statistic();
        $statistic->saveStatistic($this->title);

        $per_page = 2;
        $page = (int)(isset($_GET['page'])?($_GET['page']-1):0);
        $start = abs($page*$per_page);
        $data = $this->model->findSome($start, $per_page);

        $total_rows = $this->model->getCountRecords();

        $num_pages = ceil($total_rows/$per_page);

        $comment_model = new Comment();
        $comments = $comment_model->findAll();

        $vars = [
            'data' => $data,
            'num_pages' => $num_pages,
            'page' => $page,
            'comments' => $comments,
        ];

        $this->view->render($this->title, $vars);
    }

    public function addCommentAction() {
        $_POST = json_decode(file_get_contents("php://input"), true);
        $model = new Comment();
        $model->id_blog = $_POST["index"];
        $model->message = $_POST["comment"];
        $model->author = $_SESSION["fio"];
        $model->date = date("Y-m-d H:i:s");
        $model->save();
        $data["author"] = $model->author;
        $data["message"] = $model->message;
        $data["date"] = $model->date;
        $data["index"] = $model->id_blog;
        echo json_encode($data);
    }


}
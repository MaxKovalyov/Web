<?php

namespace application\controllers;

use application\core\Controller;
use application\models\validators\UploadBlogsValidator;
use application\models\StatisticModel;

class UploadBlogsController extends Controller
{
    private $title = 'Загрузка сообщений блога';

    private $errors = [];

    public function indexAction() {

        $statistic = new StatisticModel();
        $statistic->saveStatistic($this->title);

        if($_FILES["blogs"]) {
            $extension = substr($_FILES["blogs"]["name"], strrpos($_FILES["blogs"]["name"], '.') + 1);
            if($extension == "csv") {
                $delimiter = ';';
                $file = fopen($_FILES["blogs"]["tmp_name"], "a+");
                $validator = new UploadBlogsValidator();
                $data = [];
                $i = 0;
                while($row = fgetcsv($file, 1000, $delimiter)) {
                    foreach($row as $key => $value) {
                        $row[$key] = iconv("CP1251", "UTF-8", $value);
                    }
                    $row[4] = "public/files/null.gif";
                    $this->errors = $validator->validate($row);
                    if(!$this->errors) {
                        $data[$i] = $row;
                    }
                    $i++;
                }
                $this->model->saveAll($data);
            }
            
        }

        $vars = [
            'errors' => $this->errors,
        ];

        $this->view->render($this->title, $vars);
    }


}
<?php

namespace application\models;

use application\core\BaseActiveRecord;

class StatisticModel extends BaseActiveRecord{

    protected static $tableName = 'statistic';
    protected static $dbFields = array();

    public $time;
    public $page;
    public $ip;
    public $host;
    public $browser;

    function saveStatistic($page) {
        $this->time = date('Y-m-d H:m:s');
        $this->page = $page;
        $this->ip = $_SERVER['REMOTE_ADDR'];
        $this->host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
        $this->browser = $_SERVER['HTTP_USER_AGENT'];
        $this->save();
    }

}
<?php

namespace application\models;

use application\core\BaseActiveRecord;
use PDO;


class Test extends BaseActiveRecord {

    protected static $tableName = 'test';

    public $date;

    public $fio;

    public $group;

    public $question1;

    public $question2;

    public $question3;

    public $answer1;

    public $answer2;

    public $answer3;

    function __construct() {

        parent::__construct();

    }

}

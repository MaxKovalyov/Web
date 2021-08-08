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

    public function save() {
        $fields_list = array();
        foreach(static::$dbFields as $field => $field_type) {
            $value = $this->$field;
            if(strpos($field_type, 'int')===false && strpos($field_type, 'tinyint(1)')===false) $value = "'$value'";
            $fields_list[] = "$value";
        }
        $sql = "INSERT INTO ".static::$tableName." VALUES(".join(',',$fields_list).");";
        $stmt = static::$pdo->query($sql);
        if($stmt) {
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } else {
            print_r(static::$pdo->errorInfo());
        }
    }

}

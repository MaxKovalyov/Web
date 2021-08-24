<?php

namespace application\models;

use application\core\BaseActiveRecord;
use PDO;

class BlogEditor extends BaseActiveRecord{

    protected static $tableName = 'blog';

    public $id;

    public $date;

    public $title;

    public $img;

    public $autor;

    public $message;

    function __construct() {

        parent::__construct();

    }

    public static function find($id) {
        $sql = "SELECT * FROM ".static::$tableName." WHERE id = $id";
        $stmt = static::$pdo->query($sql);

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if(!$row) {
            return null;
        }

        $ar_obj = new static();
        foreach($row as $key => $value) {
            $ar_obj->$key = $value;
        }

        return $ar_obj;
    }

}
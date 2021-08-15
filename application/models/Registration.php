<?php

namespace application\models;

use application\core\BaseActiveRecord;
use PDO;

class Registration extends BaseActiveRecord{

    protected static $tableName = 'users';

    public $login;

    public $fio;

    public $email;

    public $password;

    function __construct() {

        parent::__construct();

    }

    // public static function find($login) {
    //     $sql = "SELECT * FROM ".static::$tableName." WHERE login = '$login'";
    //     $stmt = static::$pdo->query($sql);

    //     $row = $stmt->fetch(PDO::FETCH_ASSOC);

    //     if(!$row) {
    //         return false;
    //     } else {
    //         $ar_obj = new static();
    //         foreach($row as $key => $value) {
    //             $ar_obj->$key = $value;
    //         }
    //         return $ar_obj;
    //     }
    // }

}
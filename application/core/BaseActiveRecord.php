<?php

namespace application\core;

use PDO;
use PDOException;

class BaseActiveRecord {

    protected static $tableName;

    protected static $dbFields;

    public static $pdo;

    public function __construct()
    {
        if(!static::$tableName) {
            return;
        }

        static::setupConnection();
        static::getFields();
    }

    public static function setupConnection() {
        if(!isset(static::$pdo)) {
            try {
                $config = require 'application/config/db.php';
                static::$pdo = new PDO('mysql:host='.$config['host'].';dbname='.$config['name'].'', $config['user'], $config['password']);
            }
            catch(PDOException $ex) {
                die("Ошибка подключения к БД: $ex");
            }
        }
    }

    public static function getFields() {
        $stmt = static::$pdo->query("SHOW FIELDS FROM ".static::$tableName);
        while($row = $stmt->fetch()) {
            static::$dbFields[$row['Field']] = $row['Type'];
        }
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

    public static function findAll() {
        $sql = "SELECT * FROM ".static::$tableName;
        $stmt = static::$pdo->query($sql);

        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if(!$rows) {
            return null;
        } else {
            return $rows;
        }
    }

    public function delete() {
        $sql = "DELETE FROM ".static::$tableName." WHERE id = ".$this->id;
        $stmt = static::$pdo->query($sql);
        if($stmt) {
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } else {
            print_r(static::$pdo->errorInfo());
        }
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

    public function update() {
        $fields_list = array();
        foreach(static::$dbFields as $field => $field_type) {
            $value = $this->$field;
            if(strpos($field_type, 'int')===false) $value = "'$value'";
            $fields_list[] = "$field = $value";
        }
        $sql = "UPDATE ".static::$tableName." SET ".join(',',$fields_list)." WHERE id = ".$this->id;
        $stmt = static::$pdo->query($sql);
        if($stmt) {
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } else {
            print_r(static::$pdo->errorInfo());
        }
    }

}
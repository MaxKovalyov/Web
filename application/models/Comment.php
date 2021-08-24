<?php

namespace application\models;

use application\core\BaseActiveRecord;

class Comment extends BaseActiveRecord{

    protected static $tableName = 'comments';
    protected static $dbFields = array();

    public $id_blog;

    public $author;

    public $date;

    public $message;

    function __construct() {

        parent::__construct();

    }
}
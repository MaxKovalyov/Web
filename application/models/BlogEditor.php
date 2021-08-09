<?php

namespace application\models;

use application\core\BaseActiveRecord;

class BlogEditor extends BaseActiveRecord{

    protected static $tableName = 'blog';

    public $date;

    public $title;

    public $img;

    public $message;

    function __construct() {

        parent::__construct();

    }

}
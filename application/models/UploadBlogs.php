<?php

namespace application\models;

use application\core\BaseActiveRecord;

class UploadBlogs extends BaseActiveRecord{

    protected static $tableName = 'blog';

    public $date;

    public $title;

    public $img;

    public $autor;

    public $message;

    function __construct() {

        parent::__construct();

    }

}
<?php

namespace application\models;

use application\core\BaseActiveRecord;

class Registration extends BaseActiveRecord{

    protected static $tableName = 'users';

    public $login;

    public $fio;

    public $email;

    public $password;

    function __construct() {

        parent::__construct();

    }

}
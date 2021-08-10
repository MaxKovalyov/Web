<?php

namespace application\models\validators;

class UploadBlogsValidator
{

    private $errors = []; 

    public function __construct()
    {

    }

    public function validate($data): array
    {

        foreach($data as $field => $value )
        {
            if($field == 0) {
                if(strlen($value) < 4) {
                    $this->errors[$field] = 'Слишком короткий заголовок!'; 
                }
            }
            if($field == 3) {
                if(!($value == date("Y-m-d H:i:s", strtotime($value)))) {
                    $this->errors[$field] = 'Дата не совпадает с шаблоном yyyy-mm-dd hh:ii:ss'; 
                }
            }
        }
        return $this->errors;
    }
}
<?php

namespace application\models\validators;

class BlogValidator
{

    private $data = [];
    private $errors = []; 

    public function __construct(array $data)
    {
        $this->data  = $data;
    }

    public function validate(): array
    {
        
        $data  = $this->data;

        foreach($data as $field => $value )
        {
            if($field == 'title') {
                if(strlen($value) < 4) {
                    $this->errors[$field] = 'Слишком короткий заголовок!'; 
                }
            }
            if($field == 'img') {
                $extension = substr($value, strrpos($value, '.') + 1);
                if(!($extension == "jpg" || $extension == "png" || $extension == "gif" || $extension == "bmp" || $extension == "jpeg" || $extension == "tif")) {
                    $this->errors[$field] = 'Выбран неверный формат изображения'; 
                }
            }
        }
        return $this->errors;
    }
}
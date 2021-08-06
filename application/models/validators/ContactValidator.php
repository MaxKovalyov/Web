<?php

namespace application\models\validators;


class ContactValidator
{
    private $errors = [];

    private $data;

    public function __construct(array $data)
    {
        $this->data  = $data;
    }

    public function validate(): array
    {
        
        $data  = $this->data;
        
        foreach( $data as $field => $value )
        {
            if(empty($value)) {
                $this->errors[$field] = 'Пустое поле!';
            } else {
                if($field == 'fio') {
                    if(!preg_match("/^[A-ZА-ЯЁ]{1}[a-zа-яё-]+ [A-ZА-ЯЁ]{1}[a-zа-яё-]+ [A-ZА-ЯЁ]{1}[a-zа-яё-]/",$value)) {
                        $this->errors[$field] = 'Неверно введено ФИО!'; 
                    }
                }
                if($field == 'radio') {
                    if(!isset($value)) {
                        $this->errors[$field] = 'Не выбрано значение!'; 
                    }
                }
                if($field == 'select') {
                    if($value == '0') {
                        $this->errors[$field] = 'Не выбрано значение!'; 
                    }
                }
                if($field == 'date') {
                    if(($value[0]=='d')||($value[3]=='m')||($value[strlen($value)-1]=='y')) {
                        $this->errors[$field] = 'Выбрана некорректная дата!'; 
                    }
                }
                if($field == 'email') {
                    if(!filter_var($value, FILTER_VALIDATE_EMAIL)) {
                        $this->errors[$field] = 'Введён некорректный email!'; 
                    }
                }
                if($field == 'phone') {
                    if(!preg_match("/^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/",$value)) {
                        $this->errors[$field] = 'Введён некорректный номер телефона!'; 
                    }
                }
            }
        }
        return $this->errors;
    }

}
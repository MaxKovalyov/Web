<?php

namespace application\models\validators;

class TestValidator
{

    public $test_results = [];
    private $errors = []; 

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
                if($field == 'select' || $field == 'selectGroup') {
                    foreach($value as $key => $val) {
                        if($val == '0') {
                            $this->errors[$field] = 'Ничего не выбрано!'; 
                        }
                    }
                }
                if($field == 'number') {
                    if(!preg_match("/^[0-9]$/",$value)) {
                        $this->errors[$field] = 'Введено не число!';
                    }
                }
            }
        }
        return $this->errors;
    }

    public function checkTest(): array {
        //debug($_POST);
        if($_POST['number']=='3') {
            $test_results['answer1'] = 1; 
        } else {
            $test_results['answer1'] = 0; 
        }
        
        $strAnswer = "";
        foreach($_POST['checkbox'] as $key => $value) {
            $strAnswer = $strAnswer.$value;
        }
        if($strAnswer == "BCD") {
            $test_results['answer2'] = 1; 
        } else {
            $test_results['answer2'] = 0; 
        }
        

        if($_POST['select'][0] == '1') {
            $test_results['answer3'] = 1;
        } else {
            $test_results['answer3'] = 0;
        }
        return $test_results;
    }
}
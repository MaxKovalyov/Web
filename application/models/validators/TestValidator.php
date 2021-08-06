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
        $countCorrect = 0;
        //debug($_POST);
        if($_POST['number']=='3') {
            $test_results['number'] = "Вопрос 1: Ответ верный!"; 
        } else {
            $test_results['number'] = "Вопрос 1: Ответ неверный!"; 
        }
        if(empty($_POST['checkbox'])) {
            $test_results['checkbox'] = "Вопрос 2: Ответ не выбран!";
        } else {
            foreach($_POST['checkbox'] as $key => $value) {
                if($value == 'A') {
                    $test_results['checkbox'] = "Вопрос 2: Выбран неверный ответ!";
                    break;
                } else {
                    $countCorrect++;
                }
            }
            if($countCorrect == 3) {
                $test_results['checkbox'] = "Вопрос 2: Выбраны все верные ответы!";
            }
            else {
                $test_results['checkbox'] = "Вопрос 2: Выбраны не все верные ответы!"; 
            }
        }
        if($_POST['select'][1] == 'true') {
            $test_results['select'] = "Вопрос 3: Выбран правильный ответ!";
        } else {
            $test_results['select'] = "Вопрос 3: Выбран неверный ответ!";
        }
        return $test_results;
    }
}
<?php # файл PostValidator.php

namespace application\models\validators;

require 'application/models/validators/IRules.php';


class TestValidator extends Validator
{

    public $test_results = [];

    public function __construct(array $data)
    {
        if(!$_POST['checkbox']) {
            $data['checkbox'] = '';
        }
        parent::__construct($data);
        $this->data  = $data;
    }


    public function rules(): array
    {
        // список правил-объектов проверяющих значение
        return [
            'fio'   => [ new IsFIO, new NotEmpty ],          // не должно быть пустое
            'number' => [ new IsNumber, new NotEmpty ],
            'checkbox' => [ new CheckBox ],
            'select'=> [ new IsSelectedArray ],
        ];
    }

    public function checkTest(): array {
        $countB = 0;
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
                }
                if($value == 'B') {
                    $countB++;
                }
            }
            if($countB == 3) {
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
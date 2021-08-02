<?php

namespace application\models\validators;

abstract class Validator
{
    protected $errors = [];

    /**
     * @var array
     */
    private $data;

    // в конструктор передаем массив данных запроса из формы
    public function __construct(array $data)
    {
        $this->data  = $data;
    }

    // данный метод возвращает массив правил валидации, он разный для каждого валидатора
    public abstract function rules(): array;

    // добавляем ошибку (если поле не соответствует правилу) в список
    // $field - название поля формы на английском (например, name - имя, age - возраст)
    // $fieldName - локализованное название (  например, name - Имя, age - Возраст)
    // $vars - массив заполнителей в формате [":переменная_1", ":переменная_2"],
    // необходимы при выводе сообщений об ошибках
    protected function addError($field, $fieldName, $message, $vars)
    {
        $replace = [];
        $replace[':field'] = $fieldName;
        $replace = array_merge($replace, $vars);

        $this->errors[$field] = strtr($message, $replace);
    }

    // данный метод непосредственно проводит проверку
    // возвращает массив ошибок, если таковые имеются
    public function validate(): array
    {
        $rules = $this->rules();
        //debug($rules);
        $data  = $this->data;
        // локализованный список ошибок
        $messages = require('application/config/validator.php');

        // Todo: check for $rules and $data length equality

        foreach( $data as $field => $value )
        {
            $rulesForParam = $rules[$field];

            foreach ($rulesForParam as $rule ) {
                if( !$rule->check($value) ) {
                    $this->addError(
                        $field,
                        $messages['field'][$field],
                        $messages['rule'][(string) $rule],
                        $rule->getVars()
                    );
                }  
            }
        }
        return $this->errors;
    }

    public function ShowErrors($errors) {
        
    }
}
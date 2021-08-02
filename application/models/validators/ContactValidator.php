<?php # файл PostValidator.php

namespace application\models\validators;

require 'application/models/validators/IRules.php';


class ContactValidator extends Validator
{


    public function __construct(array $data)
    {
        if(!$data['radio']) {
            $data['radio'] = '';
        }
        parent::__construct($data);
        $this->data  = $data;
    }


    public function rules(): array
    {
        // список правил-объектов проверяющих значение
        return [
            'fio'   => [ new IsFIO, new NotEmpty ],
            'phone' => [ new IsPhoneNumber, new NotEmpty ],
            'radio' => [ new RadioChecked ],
            'email' => [ new IsEmail, new NotEmpty ],
            'select'=> [ new IsSelected ],
            'date'  => [ new IsDate ],
        ];
    }

}
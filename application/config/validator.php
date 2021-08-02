<?php # файл переводов - validator.php

return [

    'rule' => [
        'notempty'  => 'Поле \':field\' не может быть пустым!',
        'isselected'=> '\':field\' не выполнен!',
        'isemail'   => 'Введён некорректный \':field\'!',
        'isphone'   => 'Введён некорректный \':field\'!',
        'isfio'     => 'Введёны некорректные данные \':field\'!',
        'checkradio'=> '\':field\' не сделан!',
        'checkbox'  => 'Не выбрано значение в \':field\'',
        'isnumber'  => 'Введено некорректное \':field\'',
        'isdate'    => 'Введена некорректная \':field\'',
    ],

    'field' => [
        'email'   => 'e-mail',
        'fio'     => 'ФИО',
        'phone'   => 'Номер телефона',
        'radio'   => 'Выбор',
        'select'  => 'Выбор элемента',
        'checkbox'=> 'поле выбора',
        'number'  => 'число',
        'date'    => 'дата',
    ]
];
<?php

namespace application\models;

use application\core\Model;

class Interests extends Model{

    function __construct() {
        define("LISTS",[
            0 => [
                'Властелин колец', 
                'Пираты карибского моря',
                'Хроники Нарнии',
                'Гарри Поттер',
                'День Независимости',
                'Сердце дракона',
                'Аватар',
                'Мир юрского периода',
                'Мстители',
                'Звездные войны',
                'Троя',
            ],
            1 => [
                'Мастера меча онлайн',
                'Сверхъестественное',
                'Сотня',
                'Ривердэйл',
                'Ведьмак',
                'Спартак',
            ],
            2 => [
                'Футбол',
                'Волейбол',
                'Баскетбол',
                'Теннис',
                'Шахматы',
            ],
            3 => [
                'The Witcher 3',
                'The Elder Scrolls: Skyrim',
                'FarCry 5',
                'Assassins Creed: Origins',
                'Grand Theft Auto 5',
                'Total War: Attila',
                'Stellaris',
                'Gothic 1,2,3',
                'Counter Strike: Global Offensive',
                'Cyberpunk 2077',
            ],
            4 => [
                'League of Legends Legends Never Die',
                'Dirty Palm To The Back',
                'Rammstein Sonne',
                'Rammstein Main Herz brennt',
                'Nimez Feel U',
                'Tristam The Vine',
            ],
        ]);

        define("ANCHORS",[
            'film',
            'serial',
            'sportgame',
            'game',
            'music',
        ]);

        define("TITLES", [
            'Мои любимые фильмы',
            'Мои любимые сериалы',
            'Мои любимые виды спорта',
            'Мои любимые компьютерные игры',
            'Моя любимая музыка',
        ]);


    }

}
<?php

namespace application\models\validators;

// каждое правило должно реализовывать данный интерфейс
interface IRule
{
    /**
     * Если правило пройдено успешно возвращаем true иначе ложь
     *
     *
     * @param mixed $value
     *
     * @return bool
     */
    function check($value): bool;
}
// правило - значение не должно быть пустым
class NotEmpty implements IRule
{
   
    public function check($value): bool {
        if(empty($value)) {
            return false;
        } else {
            return true;
        }
    }

    public function getVars() {
        return [];
    }

    public function __toString() {
        return 'notempty';
    }
}

class IsFIO implements IRule 
{
    public function check($value): bool {
        if(preg_match("/^[A-ZА-ЯЁ]{1}[a-zа-яё-]+ [A-ZА-ЯЁ]{1}[a-zа-яё-]+ [A-ZА-ЯЁ]{1}[a-zа-яё-]/",$value)) {
            return true;
        } else {
            return false;
        }
    }

    public function getVars() {
        return [];
    }

    public function __toString() {
        return 'isfio';    
    }

}

class IsSelected implements IRule 
{

    public function check($value): bool {
        if($value == '0') {
            return false;
        } else {
            return true;
        }
    }

    public function getVars() {
        return [];
    }

    public function __toString() {
        return 'isselected';    
    }

}

class IsSelectedArray implements IRule 
{
    public function check($value): bool {
        foreach($value as $key => $val) {
            if($val == '0') {
                return false;
            }
        }
        return true;
    }

    public function getVars() {
        return [];
    }

    public function __toString() {
        return 'isselected';    
    }

}

class IsPhoneNumber implements IRule 
{

    public function check($value): bool {
        if(preg_match("/^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/",$value)) {
            return true;
        } else {
            return false;
        }
    }

    public function getVars() {
        return [];
    }

    public function __toString() {
        return 'isphone';    
    }

}

class IsEmail implements IRule 
{

    public function check($value): bool {
        if(filter_var($value, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }

    public function getVars() {
        return [];
    }

    public function __toString() {
        return 'isemail';    
    }

}

class RadioChecked implements IRule 
{

    public function check($value): bool {
        if(!$value) {
            return false;
        } else {
            return true;
        }
    }

    public function getVars() {
        return [];
    }

    public function __toString() {
        return 'checkradio';    
    }

}

class IsNumber implements IRule 
{

    public function check($value): bool {
        if(preg_match("/^[0-9]$/",$value)) {
            return true;
        } else {
            return false;
        }
    }

    public function getVars() {
        return [];
    }

    public function __toString() {
        return 'isnumber';    
    }

}

class CheckBox implements IRule 
{

    public function check($value): bool {
        if(!$value) {
            return false;
        } else {
            return true;
        }
    }

    public function getVars() {
        return [];
    }

    public function __toString() {
        return 'checkbox';    
    }

}

class IsDate implements IRule 
{

    public function check($value): bool {
        if(($value[0]=='d')||($value[3]=='m')||($value[strlen($value)-1]=='y')) {
            return false;
        } else {
            return true;
        }
    }

    public function getVars() {
        return [];
    }

    public function __toString() {
        return 'isdate';    
    }

}


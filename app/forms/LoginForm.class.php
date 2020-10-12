<?php

namespace app\forms;

class LoginForm
{
    public $Login;
    public $Pass;

    function checkIsNull() {
        foreach ($this as $key => $value) {
            if(!isset($value)) return false;
            else return true;
        }
    }
}
<?php

namespace app\forms;

class EdytujForm {
	public $Mark;
	public $isFavourite;

        
        function checkNull() {
        foreach ($this as $key => $value) {
            if(!isset($value)) return false;
            else return true;
        }
    }
} 
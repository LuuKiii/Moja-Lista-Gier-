<?php

namespace app\forms;

class DodajForm {
	public $GameName;
	public $Premiere;
        public $Description;
        public $Image;
        public $idProducent;
        public $ProducentName;
        
        function checkNull() {
        foreach ($this as $key => $value) {
            if(!isset($value)) return false;
            else return true;
        }
    }
} 
<?php

namespace app\forms;

class Dodaj2Form {
	public $ProducentName;
	public $Local;
        public $DescriptProd;

        
        function checkNull() {
        foreach ($this as $key => $value) {
            if(!isset($value)) return false;
            else return true;
        }
    }
} 
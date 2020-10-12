<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\DodajForm;
use core\Validator;


class DodajMenuCtrl {    
    
        public function action_DodajMenu() 
        {  
        App::getSmarty()->display("DodajMenu.tpl");
    }
}
<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\SessionUtils;
use app\forms\LoginForm;
use core\Validator;


class LoginCtrl {

    private $form;
    private $accountData;

    public function __construct() 
    {
        $this->form = new LoginForm();
    }
    
    public function getParams()
    {
        $this->form->Login = ParamUtils::getFromRequest("Login");
        $this->form->Pass = ParamUtils::getFromRequest("Pass");
    }

    public function validate() 
    {
        
     if(!$this->form->checkIsNull()) return false;
     
     $valid = new Validator();
     
     $valid->validate($this->form->Login,
     [
        'trim' => true,
        'required' => true,
        'required_message' => 'Wymagane : Login',
        'min_length' => 3,
        'max_length' => 30,
        'validator_message' => 'Login musi zawierać od 3 do 30 znaków'
     ]);
     
     $valid->validate($this->form->Pass,
     [
            'required' => true,
            'required_message' => 'Wymagane : Hasło',
     ]);
     
     if(App::getMessages()->isError()) return false;
     
     try{
         $this->accountData = App::getDB()->get("user", 
        [
            'idUser',
            'Login',
            'Pass',
            'Role',
            'Active',
        ],[
            'Login' => $this->form->Login,
            'Pass' => md5($this->form->Pass),
        ]);
         
         if(empty($this->accountData)){
            Utils::addErrorMessage("Hasło bądź Login jest nieprawidłowe");
        }
        
     } catch (\PDOException $e) 
     {
         Utils::addErrorMessage("Błąd połączenia z bazą danych");
     }
     
     if(!App::getMessages()->isError()) return true;
     else return false;
     
    }

    public function action_loginShow() 
    {
        $this->generateView();
    }

    public function action_login() 
    {
        $this->getParams();
        if ($this->validate()) 
        {
            SessionUtils::store("idUser", $this->accountData["idUser"]);
            SessionUtils::store("Role", $this->accountData["Role"]);
            RoleUtils::addRole($this->accountData['Role']); 
            header("Location: ".App::getConf()->app_url."/Glowna");
        } 
        else {
            $this->generateView();
        }
    }

    public function action_logout() 
    {
        session_destroy();
        App::getRouter()->redirectTo('Glowna');
    }

    public function generateView() 
    {
        App::getSmarty()->assign('form', $this->form); 
        App::getSmarty()->display('Login.tpl');

    }

}
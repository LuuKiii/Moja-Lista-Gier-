<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\RegisterForm;
use core\Validator;

class RegisterCtrl {
    
    private $form;
    
    public function __construct() 
    {
        $this->form = new RegisterForm();
    }
    
    public function getParams()
    {
        $this->form->Login = ParamUtils::getFromRequest("Login");
        $this->form->Pass = ParamUtils::getFromRequest("Pass");
        $this->form->Email = ParamUtils::getFromRequest("Email");
        
        if (App::getMessages()->isError())
            $this->generateView();
    }
    
    public function validate() {
        
        $valid = new Validator();
        $valid->validate($this->form->Login,[
            'trim' => true,
            'required' => true,
            'required_message' => 'Login jest wymagany',
            'min_length' => 3,
            'max_length' => 30,
            'validator_message' => 'Login powinien zawierać od 3 do 30 znaków'
        ]);
        
        $valid->validate($this->form->Pass,[
            'required' => true,
            'required_message' => 'Hasło jest wymagane',
            'min_length' => 3,
            'max_length' => 32,
            'validator_message' => 'Hasło powinno zawierac od 3 do 32 znaków'
        ]);
        
        $valid->validate($this->form->Email,[
            'email' => true,
            'trim' => true,
            'required' => true,
            'min_length' => 4,
            'max_length' => 79,
            'required_message' => 'Email jest wymagany',
            'validator_message' => "Nieprawidłowy adres email"
        ]);
        
        $this->Duplicate();
        
        if(!App::getMessages()->isError()) return true;
        else return false;
    }
    
    public function toDB(){
        try{
            App::getDB()->insert("user",[
                'Login' => $this->form->Login,
                'Pass' => md5($this->form->Pass),
                'Email' => $this->form->Email,
                'Role' => 'user',
                'Active'=>1
            ]);
            
            Utils::addInfoMessage("Konto zostało utworzone");
        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych!");
        }
    }
    
    public function Duplicate(){
        try{
            $loginCount = App::getDB()->has("user", [
                'Login' => $this->form->Login
            ]);
            
            $emailCount = App::getDB()->has("user",[
                'Email' => $this->form->Email
            ]);
            
            if($loginCount){
                Utils::addErrorMessage("Podany login jest zajęty");
            }

            if($emailCount){
                Utils::addErrorMessage("Podany email jest zajęty");
            }

        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych");
        }
    }
    
    public function action_RegisterShow() {	        
        $this->generateView();  
    }
    
     public function action_RegisterSave() {	        
        $this->getParams();
        if($this->validate()){
            $this->toDB();
            App::getSmarty()->display('Login.tpl');
        }
        else{
            App::getSmarty()->display('Register.tpl');
        }
    }
    
    public function generateView() {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('Register.tpl');
    }
    
}

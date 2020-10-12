<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;
use core\SessionUtils;


class UserMCtrl {
    
    private $user;
       
    
    
        public function getParams()
    {
        $this->Rol = ParamUtils::getFromRequest('Role');
        $this->idUse = ParamUtils::getFromCleanURL(1);
    }
    
    
    public function Getuser() 
    {
        $user;
        
        try{
            $user=App::getDB()->select("user",[
                    'idUser',
                    'Login',
                    'Email',
                    'Role'
                   ] );
        }   
        catch(\PDOException $e)
        {
            Utils::addErrorMessage("Błąd połączenia z bazą danych!");
        }
        return $user;
    }
    
    
    
    
    public function userzmiana() {
        try {
            App::getDB()->update("user",[
                    'role' => $this->Rol
                    ],[
                    'iduser' => $this->idUse
                    ]);
        } catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych!");
        }
    }
    
    
    public function action_UserM() 
    {
        $this->user=$this->Getuser();
        $this->idUser = SessionUtils::load("idUser", true);
        
        App::getSmarty()->assign('idUse', $this->idUser);
        App::getSmarty()->assign('user', $this->user);
        App::getSmarty()->display("UserM.tpl");
    }
    
    
    public function action_UserMRola() 
    {
        $this->getParams();
        $this->userzmiana();   
        $this->user=$this->Getuser();
        $this->idUser = SessionUtils::load("idUser", true);
        
        App::getSmarty()->assign('idUse', $this->idUser);
        App::getSmarty()->assign('user', $this->user);
        App::getSmarty()->display("UserM.tpl");
    }




}

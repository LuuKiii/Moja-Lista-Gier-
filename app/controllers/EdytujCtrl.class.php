<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;
use app\forms\EdytujForm;
use core\SessionUtils;
use core\Validator;

class EdytujCtrl {
    
    private $idUser;
    private $idGame;
    private $game;
    
    public function __construct() {
        $this->form = new EdytujForm();
    }
    
    public function getParams()
    {
        $this->form->Mark = ParamUtils::getFromRequest("Mark");
        $this->form->IsFavourite = ParamUtils::getFromRequest("IsFavourite");
    }
    
       public function validate() {
        
        if(!$this->form->checkNull()) return false;
        
        $valid = new Validator();
        $valid->validate($this->form->Mark,[
            'int'=>true,
            'min'=>0,
            'max'=>10,
            'required' => true ,
            'required_message' => 'Podaj wartość całkowitą z przedziału 0-10',
            'validator_message' => "Zakres 0-10"
        ]);
        
        $valid->validate($this->form->IsFavourite,[
            'int'=>true,
            'min'=>0,
            'max'=>1,
            'required' => true ,
            'required_message' => 'Podaj wartość całkowitą z przedziału 0-1',
            'validator_message' => "Zakres 0-1"
        ]);
        
        
        if(!App::getMessages()->isError()) return true;
        else return false;
    } 
    
    
    
    
    public function getGameDB()
    {
        $game;
        
        try{
        $game= App::getDB()->select("game",   
                [
                    'idGame',
                    'GameName'
                ],[
                  'idGame[=]'=>$this->idGame  
                    
        ]);} 
        catch (\PDOException $e) {
         Utils::addErrorMessage("Błąd połączenia z bazą danych");
        }
        
        return $game;
    }
    
    public function toDB()
    {
        try{            
            App::getDB()->update("user_has_game",[
                  'Mark'=>  $this->form->Mark,
                  'isFavourite'=> $this->form->IsFavourite
                    ],[
                  'User_idUser[=]'=>$this->idUser,     
                  'Game_idGame[=]'=>$this->idGame  
            ]);
            
            Utils::addInfoMessage("Edycja zakończona sukcesem");
        }
        catch(\PDOException $e)
        {
            Utils::addErrorMessage("Błąd połączenia z bazą danych!");
        }
    }
    public function action_Edytuj()
    {
        $this->getParams();
        $this->idGame=ParamUtils::getFromCleanURL(1);
        $this->game=$this->getGameDB();
        
        App::getSmarty()->assign('game', $this->game);
        App::getSmarty()->display("Edytuj.tpl");
    }
    
    public function action_Edytuj2() 
	{     
        $this->getParams();
        $this->idGame=ParamUtils::getFromCleanURL(1);
        $this->game=$this->getGameDB();
        $this->idUser = SessionUtils::load("idUser", true);
        
       if($this->validate())
       {
        $this->toDB();
       }
        
        App::getSmarty()->assign('game', $this->game);
	App::getSmarty()->display("Edytuj.tpl");
	}
        



}

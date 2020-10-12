<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;
use core\SessionUtils;

class DetaleCtrl {
    
    
    public function counter()
    {
        $count;
        
        try {
            $count = App::getDB()->count("game",[
                'idGame[<]' => $this->gameId
                
            ]);
            
            
        } catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych!");
        }
        
        return $count;
    }

        public function getGamesDB()
    {
        $games;
        
        try{
            $games=App::getDB()->select("game",[
                    "[>]producent"=>["Producent_idProducent"=>"idProducent"],
                ],[
                      'game.idGame',
                      'game.GameName',
                      'game.Premiere',
                      'game.Image',
                      'Description',
                      'game.Producent_idProducent',
                      'producent.ProducentName'
                    ]);
        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych");
        }
        return $games;
    }
    
	public function action_Detale() 
	{
        $this->gameId = ParamUtils::getFromCleanURL(1,true,'Błędne wywołanie aplikacji');
        $this->game=$this->getGamesDB();
        App::getSmarty()->assign('games', $this->game);
        App::getSmarty()->assign('gameid', $this->counter());
	App::getSmarty()->display("Detale.tpl");
	}
}

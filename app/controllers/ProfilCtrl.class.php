<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;
use core\SessionUtils;


class ProfilCtrl {
    
    private $idUser;
    private $idGame;
    private $game;
    


    
    
    public function getGamesDB($idUser)
    {
        $games;
        
        try{
            $games=App::getDB()->select("game",[
                    "[>]producent"=>["Producent_idProducent"=>"idProducent"],
                    "[>]user_has_game"=>["idGame"=>"Game_idGame"],
                ],[
                      'game.idGame',
                      'game.GameName',
                      'game.Producent_idProducent',
                      'producent.ProducentName',
                      'user_has_game.Mark',
                    
                    ],[
                        'user_has_game.User_idUser[=]' => $idUser,
                        "ORDER"=>["user_has_game.Mark"=>"DESC"],
                        'user_has_game.isFavourite[=]' => 0,
                    ]);
        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych");
        }
        return $games;
    }
    
    
    public function getGamesDBfav($idUser)
    {
        $games;
        
        try{
            $games=App::getDB()->select("game",[
                    "[>]producent"=>["Producent_idProducent"=>"idProducent"],
                    "[>]user_has_game"=>["idGame"=>"Game_idGame"],
                ],[
                      'game.idGame',
                      'game.GameName',
                      'game.Producent_idProducent',
                      'producent.ProducentName',
                      'user_has_game.Mark',
                      'user_has_game.User_idUser',
                    
                    ],[
                        'user_has_game.User_idUser[=]' => $idUser,
                        "ORDER"=>["user_has_game.Mark"=>"DESC"],
                        'user_has_game.isFavourite[=]' => 1,
                    ]);
        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych");
        }
        return $games;
    }
    
    public function Usun()
    {
            try{
            App::getDB()->delete("user_has_game",[
                        'user_has_game.User_idUser[=]' => $this->idUser,
                        'user_has_game.Game_idGame[=]' =>$this->idGame
                    ]);
        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych");
        }
    }
    
    
	public function action_Profil() 
	{
        $this->idUser = SessionUtils::load("idUser", true);
        $this->game=$this->getGamesDB($this->idUser);
        $this->gamefav=$this->getGamesDBfav($this->idUser);
        App::getSmarty()->assign('games', $this->game);
        App::getSmarty()->assign('gamesf', $this->gamefav);
	App::getSmarty()->display("Profil.tpl");
	}
        
        
        public function action_ProfilUsun() 
        {
        $this->idUser = SessionUtils::load("idUser", true);
        $this->idGame=ParamUtils::getFromCleanURL(1);
        $this->Usun();
        $this->game=$this->getGamesDB($this->idUser);
        $this->gamefav=$this->getGamesDBfav($this->idUser);
        Utils::addInfoMessage("Pozycja usunięta");
        
        App::getSmarty()->assign('games', $this->game);
        App::getSmarty()->assign('gamesf', $this->gamefav);
	App::getSmarty()->display("Profil.tpl");
        }
        

}

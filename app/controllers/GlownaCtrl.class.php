<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;
use core\SessionUtils;


class GlownaCtrl {
    
    private $ile;
    private $game;
    
    public function getParams() 
    {
        $this->ile = 6;
    }
    

    
    
    public function getGamesDB($ile)
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
                      'game.Producent_idProducent',
                      'producent.ProducentName'
                    
                    ],[
                        'Premiere[<]' => (new \DateTime())->format('Y-m-d'),
                        "ORDER"=>["Premiere"=>"DESC"],
                        "LIMIT" =>[0,$ile]
                    ]);
        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych");
        }
        return $games;
    }
    
    
	public function action_Glowna() 
	{
        $this->getParams();
        $this->game=$this->getGamesDB($this->ile);
        App::getSmarty()->assign('games', $this->game);
	App::getSmarty()->display("Glowna.tpl");
	}
}

<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;
use core\SessionUtils;

class Detale_ProdCtrl {
    
    public $gameId;
    public $produc;
////////////zliczza producnetów by id się nie rozsypały    
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
////////////wybiera odpowideniego producenta    
    public function getProducDB()
    {
        $produc;
        
        try{
            $produc=App::getDB()->select("game",[
                    "[>]producent"=>["Producent_idProducent"=>"idProducent"],
                ],[                    
                      'game.Producent_idProducent',
                      'producent.ProducentName',
                      'producent.Local',
                      'producent.DescriptProd'
                    ],[
                      'game.idGame[=]' => $this->gameId
                        
                    ]);
        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych");
        }
        return $produc;
    }
////////////wybiera gry które stworzył dany producnet
     public function getGryDB()
     {
       $gry;
        
        try{
            $gry=App::getDB()->select("game",      
                    [      
                      "idGame"  ,
                      "GameName",
                      "Producent_idProducent"  

                    ],[
                      'Producent_idProducent[=]' => $this->produc[0]["Producent_idProducent"]
                        
                    ]);
        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych");
        }
        return $gry;
     }
    


    public function action_Detale_Prod() 
	{
        $this->gameId = ParamUtils::getFromCleanURL(1,true,'Błędne wywołanie aplikacji');
        $this->produc=$this->getProducDB();
        $this->games=$this->getGryDB();
        App::getSmarty()->assign('games', $this->produc);
        App::getSmarty()->assign('game', $this->games);
	App::getSmarty()->display("Detale_Prod.tpl");
	}
}

<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;
use core\SessionUtils;
use app\forms\ListaForm;

class ListaCtrl {
    
    private $szuk;
    private $nastrone;
    
    private $strona;
    private $pierwsza;
    private $ostatnia;
    private $ostatnia2;
    private $szukane;
    
    private $idgame;
    private $idUser;
    private $where;
    
    
    public function __construct() {
        $this->szuk = new ListaForm();
    }
    
    
    public function getParams() {
    $this->szuk->name = ParamUtils::getFromRequest('name');
    $this->nastrone=7;
    }
    
    /////liczy pozycje 
    public function policz()
    {
        $ilosc;
        
        try {
            $ilosc = App::getDB()->count("game",[
                'game.GameName[~]' => $this->szuk->name
                ]);
        } catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych!");
        }
        
        $ilosc/=$this->nastrone;
        
        
        if(!is_int($ilosc))
        {
           $ilosc = intval($ilosc);
           $ilosc +=1;
        }
        
        return $ilosc;
    }
    
/////////////wyszukuje szukanej pozycji     
    public function getGamesDB()
    {
        $games;
        
        
        if(!isset($this->strona)) $this->strona=1;
        
        $indeks1=($this->strona-1)*$this->nastrone;
        
        if($this->szuk->name != "")
        {
            $where=$this->szuk->name;
        }else{
            $where=$this->szukane;
        }
        
        try{
            $games=App::getDB()->select("game",[
                    "[>]producent"=>["Producent_idProducent"=>"idProducent"],
                ],[
                      'game.idGame',
                      'game.GameName',
                      'game.Producent_idProducent',
                      'producent.ProducentName'
                    ],[
                       
                      'game.GameName[~]' => $where,
                      "LIMIT" =>[$indeks1,$this->nastrone]
                    ],);
        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych");
        }
        return $games;
    }
//////////////dodaje pozycje do profilu użytkownika
     public function Dodaj($idgame,$idUser)
     {
         $ist;
         
         try{
             $ist=App::getDB()->has("user_has_game",[
                'User_idUser' => $idUser,
                'Game_idGame' => $idgame,    
                 ]);
             
         if(!$ist)
         {
             App::getDB()->insert("user_has_game",[
                 'User_idUser'=> $idUser,
                 'Game_idGame'=>$idgame,
                 'Mark'=>0,
                 'IsFavourite'=>0
                 ]);
         }
         } catch (\PDOException $e) 
         {
                 Utils::addErrorMessage("Błąd połączenia z bazą danych!");
         }
         
     }

  ////////////////lista domyślnie  
	public function action_Lista() 
	{
        $this->getParams();
        $this->strona=ParamUtils::getFromCleanURL(1);
        $this->szukane=ParamUtils::getFromCleanURL(2,false);
        $this->game=$this->getGamesDB();
        $this->ilosc=$this->policz();
        
        
       
        if ($this->strona >3) $ostatnia = $this->strona+3;
        else $ostatnia = 6;
        if($ostatnia>$this->ilosc) $ostatnia = $this->ilosc;
        if ($this->strona >3) $pierwsza = $ostatnia-5;
        else $pierwsza = 1;
        if($pierwsza<=0) $pierwsza = 1;

        $ostatnia2=$this->ilosc;
        if($ostatnia2<=0) $ostatnia= 1;
       
        App::getSmarty()->assign('wh', $this->where);  
        App::getSmarty()->assign('games', $this->game);     
        App::getSmarty()->assign('szuk', $this->szuk);
        App::getSmarty()->assign('szukane', $this->szukane);
        App::getSmarty()->assign('strona', $this->strona);
        App::getSmarty()->assign('pierwsza', $pierwsza);
        App::getSmarty()->assign('ostatnia', $ostatnia);
        App::getSmarty()->assign('ostatnia2', $ostatnia2);
	App::getSmarty()->display("Lista.tpl");
	}
        
        
 ///////////////////////////lista wraz z akcja dodawnia pozycji
        
        public function action_ListaDodaj() 
	{
        $this->strona=ParamUtils::getFromCleanURL(1);
        $this->idgame = ParamUtils::getFromCleanURL(2, true, 'Błędne wywołanie aplikacji');
        $this->idUser = SessionUtils::load("idUser", true);
        $this->Dodaj($this->idgame,$this->idUser);
        $this->getParams();
        $this->game=$this->getGamesDB();
        $this->ilosc=$this->policz();
       
        if ($this->strona >3) $ostatnia = $this->strona+3;
        else $ostatnia = 6;
        if($ostatnia>$this->ilosc) $ostatnia = $this->ilosc;
        if ($this->strona >3) $pierwsza = $ostatnia-5;
        else $pierwsza = 1;
        if($pierwsza<=0) $pierwsza = 1;

        $ostatnia2=$this->ilosc;
        if($ostatnia2<=0) $ostatnia= 1;
        
        App::getSmarty()->assign('wh', $this->where);  
        App::getSmarty()->assign('games', $this->game);     
        App::getSmarty()->assign('szuk', $this->szuk);
        App::getSmarty()->assign('szukane', $this->szukane);
        App::getSmarty()->assign('strona', $this->strona);
        App::getSmarty()->assign('pierwsza', $pierwsza);
        App::getSmarty()->assign('ostatnia', $ostatnia);
        App::getSmarty()->assign('ostatnia2', $ostatnia2);
	App::getSmarty()->display("Lista.tpl");
	}
        
        
        
        
        
        
 //////////////////////////////////lista dla ajaxa       
        
        
        
        public function action_ListaTab() 
	{
        $this->getParams();
        $this->strona=ParamUtils::getFromCleanURL(1);
        $this->szukane=ParamUtils::getFromCleanURL(2,false);
        $this->game=$this->getGamesDB();
        $this->ilosc=$this->policz();
       
        if ($this->strona >4) $ostatnia = $this->strona+3;
        else $ostatnia = 6;
        if($ostatnia>$this->ilosc) $ostatnia = $this->ilosc;
        if ($this->strona >3) $pierwsza = $ostatnia-5;
        else $pierwsza = 1;
        if($pierwsza<=0) $pierwsza = 1;

        $ostatnia2=$this->ilosc;
        if($ostatnia2<=0) $ostatnia= 1;
        
        App::getSmarty()->assign('wh', $this->where);   
        App::getSmarty()->assign('games', $this->game);     
        App::getSmarty()->assign('szuk', $this->szuk);
        App::getSmarty()->assign('szukane', $this->szukane);
        App::getSmarty()->assign('strona', $this->strona);
        App::getSmarty()->assign('pierwsza', $pierwsza);
        App::getSmarty()->assign('ostatnia', $ostatnia);
        App::getSmarty()->assign('ostatnia2', $ostatnia2);
	App::getSmarty()->display("ListaTab.tpl");
	}
}

<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\DodajForm;
use core\Validator;


class DodajCtrl {
    
    
    private $form;
    private $prod;
    
   
    
    public function __construct() {
        $this->form = new DodajForm();
    }
    
    
    
    public function getParams()
    {
        $this->form->GameName = ParamUtils::getFromRequest("GameName");
        $this->form->Premiere = ParamUtils::getFromRequest("Premiere");
        $this->form->Description = ParamUtils::getFromRequest("Description");
        $this->form->Image = ParamUtils::getFromRequest("Image");
        $this->form->idProducent = ParamUtils::getFromRequest("idProducent");    
        $this->form->ProducentName = ParamUtils::getFromRequest("ProducentName");  
    }
    
    public function validate() {
        
        if(!$this->form->checkNull()) return false;
        
        $valid = new Validator();
        $valid->validate($this->form->GameName,[
            'trim' => true,
            'required' => true,
            'required_message' => 'Podaj Nazwe Gry',
            'max_length' => 45,
            'validator_message' => 'Nazwa do 45 znaków'
        ]);
        
        $valid->validate($this->form->Premiere,[
            'required' => true,
            'required_message' => 'Podaj Date Wydania Gry',
            'max_length' => 20,
            'date_format' => 'Y-m-d',
            'validator_message' => 'Data podana w złej formie[RRRR-MM-DD]'
        ]);
        
        $valid->validate($this->form->Description,[
            'trim' => true,
            
        ]);
        
        $valid->validate($this->form->Image,[
            'trim' => true,
            'max_length' => 45,
            'validator_message' => "Za długa nazwa"
        ]);
        
        $valid->validate($this->form->ProducentName,[
            'trim' => true,
            'required' => true,
            'required_message' => 'Podaj producenta gry',
        ]);
        
        $this->Duplicate();
        
        if(!App::getMessages()->isError()) return true;
        else return false;
    }
/////////////nieistotne
    
    public function getIDpro(){
        
        $idProduc;
        
            try{           
            $idProduc = $this->form->ProducentName;
                      
        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych!");
        }
        return $idProduc;       
    }
////producenci dla selecta 
    public function getProd() {
        try{
        $producent = App::getDB()->select("producent",
                [
                    "idProducent",
                    "ProducentName"
                    
                ]);
        } catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych!");
        }
        return $producent;
        
    }
//////////
////////// sprawdzenie daty 00000000
    public function check()
    {
        $czyma;
        $ilosc1;
        $ilosc2;
        
        try {
            $ilosc1 = App::getDB()->count("game",[
                
                ]);
        } catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych!");
        }
        
        
        try{
            App::getDB()->delete("game",[
                'Premiere[=]' => "0000-00-00",
                'idGame[>]'=>80
            ]);
            
        } catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych!");
        }
        
        
        try {
            $ilosc2 = App::getDB()->count("game",[
                
                ]);
        } catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych!");
        }
        
        if($ilosc1!=$ilosc2)
        {
            Utils::addErrorMessage("Produkt został natychmiastowo usunięty, data została źle podana");
        }
        
    }
////////zapis
        public function toDB(){
        try{
            
            App::getDB()->insert("game",[
                
                'GameName' => $this->form->GameName,
                'Premiere' => $this->form->Premiere,
                'Description' => $this->form->Description,
                'Image' => $this->form->Image,
                'Producent_idProducent' => $this->form->ProducentName,
            ]);
            
            Utils::addInfoMessage("Produkt został dodany");
        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych!");
        }
    }
/////////sprawdzenie duplikacji
        public function Duplicate(){
        try{
            $GameNameCount = App::getDB()->has("game", [
                'Gamename' => $this->form->GameName,
            ]);
            
                   
            if($GameNameCount){
                Utils::addErrorMessage("Gra o takiej nazwie  została dodana");
            }


        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych");
        }
    }
    

    
    
    
    
        public function action_Dodaj() {	        
        $this->getParams();
        $this->prod=$this->getProd();
        App::getSmarty()->assign("prod", $this->prod);
        if($this->validate()){
            $this->toDB();
            $this->check();
            $this->generateView();
        }
        else{
            App::getSmarty()->display('Dodaj.tpl');
        }

    }
    
    
        public function generateView() {
            App::getSmarty()->display('DodajMenu.tpl');
    }
}
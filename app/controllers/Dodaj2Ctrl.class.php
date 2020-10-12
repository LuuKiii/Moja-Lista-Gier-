<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\Dodaj2Form;
use core\Validator;


class Dodaj2Ctrl {    
    
      private $form;
      
      
      public function __construct() {
        $this->form = new Dodaj2Form();
    }
    
    
        public function getParams()
    {
        $this->form->ProducentName = ParamUtils::getFromRequest("ProducentName");
        $this->form->Local = ParamUtils::getFromRequest("Local");
        $this->form->DescriptProd = ParamUtils::getFromRequest("DescriptProd");
    }
    
    
    public function validate() {
        
        if(!$this->form->checkNull()) return false;
        
        $valid = new Validator();
        $valid->validate($this->form->ProducentName,[
            'trim' => true,
            'required' => true,
            'required_message' => 'Podaj Nazwe Producenta',
            'max_length' => 60,
            'validator_message' => 'Nazwa do 60 znaków'
        ]);
        
        $valid->validate($this->form->Local,[

            'max_length' => 45,
            'validator_message' => 'Lokalizacja do 45 znaków'
        ]);
        
        $valid->validate($this->form->DescriptProd,[
            'trim' => true,
            
        ]);
        
        
        $this->Duplicate();
        
        if(!App::getMessages()->isError()) return true;
        else return false;
    }
    
    
    public function toDB(){
        try{
            
            App::getDB()->insert("producent",[
                
                'ProducentName' => $this->form->ProducentName,
                'Local' => $this->form->Local,
                'DescriptProd' => $this->form->DescriptProd,
            ]);
            
            Utils::addInfoMessage("Producent został dodany");
        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych");
        }
    }
    public function Duplicate(){
        try{
            $NameCount = App::getDB()->has("producent", [
                'ProducentName' => $this->form->ProducentName,
            ]);
            
                   
            if($NameCount){
                Utils::addErrorMessage("Producent o takiej nazwie już istniejie");
            }


        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych");
        }
    }
    
    
    
    public function action_Dodaj2() 
        {  
        $this->getParams();
        if($this->validate()){
            $this->toDB();
            $this->generateView();
        }
        else{
            App::getSmarty()->display('Dodaj2.tpl');
        }
    }
        
    
    
    public function generateView() {
            App::getSmarty()->display('DodajMenu.tpl');
    }
}
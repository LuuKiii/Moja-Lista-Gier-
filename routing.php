<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('Glowna'); #default action
App::getRouter()->setLoginRoute('Login'); #action to forward if no permissions

Utils::addRoute('Glowna', 'GlownaCtrl');

Utils::addRoute('Profil', 'ProfilCtrl',['user','Admin']);
Utils::addRoute('ProfilUsun', 'ProfilCtrl',['user','Admin']);

Utils::addRoute('Edytuj', 'EdytujCtrl',['user','Admin']);
Utils::addRoute('Edytuj2', 'EdytujCtrl',['user','Admin']);

Utils::addRoute('Detale', 'DetaleCtrl');

Utils::addRoute('Detale_Prod', 'Detale_ProdCtrl');

Utils::addRoute('DodajMenu', 'DodajMenuCtrl',['Admin']);
Utils::addRoute('Dodaj', 'DodajCtrl',['Admin']);
Utils::addRoute('Dodaj2', 'Dodaj2Ctrl',['Admin']);
Utils::addRoute('UserM', 'UserMCtrl',['Admin']);
Utils::addRoute('UserMRola', 'UserMCtrl',['Admin']);

Utils::addRoute('Lista', 'ListaCtrl');
Utils::addRoute('ListaTab', 'ListaCtrl');
Utils::addRoute('ListaDodaj', 'ListaCtrl');

Utils::addRoute('Login', 'LoginCtrl');
Utils::addRoute('Logout', 'LoginCtrl');

Utils::addRoute('RegisterSave', 'RegisterCtrl');
Utils::addRoute('RegisterShow', 'RegisterCtrl');
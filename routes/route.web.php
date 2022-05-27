<?php

use App\Core\Router;
use App\Controller\SecurityController;
use App\Controller\ClasseController;
use App\Controller\PersonneController;
use App\Controller\ProfesseurController;
use App\Controller\ModuleController;
use App\Controller\DemandeController;
use App\Controller\InscriptionController;
use App\Exception\RouteNotFoundException;

$router=new Router();
$router->route('/login',[SecurityController::class,"authentification"]);
$router->route('/logout',[SecurityController::class,"deconnexion"]);
$router->route('/classes',[ClasseController::class,"listerClasse"]);
$router->route('/modifier-classe',[ClasseController::class,"modifierClasse"]);
$router->route('/add-classe',[ClasseController::class,"creerClasse"]);
$router->route('/personne',[PersonneController::class,"lister"]);
$router->route('/lister-professeur',[ProfesseurController::class,"listerProfesseur"]);
$router->route('/add-prof',[ProfesseurController::class,"ajouterProf"]);
$router->route('/lister-module',[ModuleController::class,"listerModule"]);
$router->route('/lister-demande',[DemandeController::class,"listerDemande"]);
$router->route('/inscrire',[InscriptionController::class,"Inscription"]);
$router->route('/delete-classe',[ClasseController::class,"deleteClasse"]);




// $router->resolve();


 try{
    //essaie de resoude la route
 $router->resolve();

 }catch(RouteNotFoundException $ex){
     //Capture l'exception et affiche
     echo $ex->message;
 }
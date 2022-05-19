<?php
namespace App\Controller;
use App\Core\Controller;
use App\Model\Demande;

class DemandeController extends Controller{
        public function ajouterDemande(){

        }
        public function listerDemande(){
                if($this->request->isGet()){ 
                    $demande=new Demande;  
                     $demandes= Demande::findAll(); 
                //      var_dump($modules);die;
        
                    $this->render('demande/listerDemande.html.php',$demandes);
                }

        }
}
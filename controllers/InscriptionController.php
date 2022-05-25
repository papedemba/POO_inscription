<?php
namespace App\Controller;

use App\Core\Controller;
//use App\Model\Inscription;
use App\Model\Etudiant;

use Digia\InstanceFactory\InstanceFactory;

class InscriptionController extends Controller {



 public function Inscription(){
    if($this->request->isGet()){   
        $this->render('inscription/inscription.html.php');
    }
    if($this->request->isPost()){  
        $etudiant=new Etudiant(); 
       // $etudiant=$this->instance(Etudiant::class,$_POST);
        // dd($etudiant->getNomComplet());
        

 $etudiant->setNomComplet($_POST['nomc_omplet']);
 $etudiant->setLogin($_POST['login']);
 $etudiant->setPassword($_POST['password']);
 $etudiant->setMatricule($_POST['matricule']);
 $etudiant->setAdresse($_POST['adresse']);
 $etudiant->setSexe($_POST['sexe']);
        $etudiant->insert();
        $this->render('inscription/inscription.html.php');
    }
 }
}
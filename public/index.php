<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
require_once("../vendor/autoload.php");
require_once("../core/fonctions.php");
require_once("../routes/route.web.php");
use App\Model\Professeur;
use App\Model\AC;
use App\Model\RP;
use App\Model\Etudiant;
use App\Model\User;
use App\Model\Classe;
use App\Model\Module;



/* // inclure les fichier
require_once("../core/IModel.php");
require_once("../core/Model.php");
require_once("../models/Personne.php");
require_once("../models/User.php");
require_once("../models/AC.php");
require_once("../models/Inscription.php");
require_once("../models/Professeur.php"); */
/* $pers1=new Personne();  */

/* $pers1->setId(1);
$pers1->setNomComplet('balla gueye');

$pers2=new Personne();
$pers2->setId(2);
$pers2->setNomComplet('mbaye thiaw');

echo $pers1->getId();
echo $pers1->getNomComplet;
// methodes stattc
Personne::setNbrePersonne(12);

echo Personne::getNbrePersonne();
 */
/* $ac=new AC();
echo $ac->getRole();   */   
// $users=User::findAll();
// $userconnect=User::findUserByLoginAndPassword('kalidou','kalidou12');
// dd($userconnect);
/* echo User::table(); */

// $prof->setNomComplet('Mor Diagne');
// $prof->setGrade('Ingenieur');
// $prof->insert();
// $ac->setNomComplet('Modou Ndiaye');
    // $ac=new Etudiant();
    //   $ac->setNomComplet('Mbaye Thiaw');
    //  $ac->setLogin('Mbaye149A@gmail.com');
    //  $ac->setPassword('Naroto 149');
    //  $ac->insert(); 
// echo "<pre>";
//  var_dump($acs);
//  echo "</pre>";
//  die;
// $etu=new Etudiant();

// $etu->setNomComplet('Sokhna Dieng');
// $etu->setLogin('Sokhna123@gmail.com');
// $etu->setPassword('Sokhna145');
// $etu->setMatricule('Sokhna201708');
// $etu->setAdresse('Dialegne');
// $etu->setSexe('F');

// $etu->insert();










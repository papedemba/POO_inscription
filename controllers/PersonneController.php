<?php
namespace App\Controller;

use App\Core\Controller;
use App\Model\Professeur;


class PersonneController extends Controller{

      public function ajoutProf(){
        $this->render('professeur/ajoutProf.html.php');
      }

      


}

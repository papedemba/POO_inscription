<?php
namespace App\Controller;

use App\Core\Controller;

class InscriptionController extends Controller {



 public function Inscription(){
    if($this->request->isGet()){   
        $this->render('inscription/inscription.html.php');
    }
 }
}
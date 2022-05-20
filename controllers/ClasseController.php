<?php
namespace App\Controller;

use App\Core\Controller;

//use App\Core\Controller;
class ClasseController extends Controller{

    public function listerClasse(){
        if($this->request->isGet()){   
            $this->render('classe/listerClasse.html.php');
        }
    }
    public function creerClasse(){

        if($this->request->isGet()){   
            $this->render('classe/creerClasse.html.php');
        }
    }
}
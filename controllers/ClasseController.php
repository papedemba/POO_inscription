<?php
namespace App\Controller;

use App\Model\Classe;
use App\Core\Controller;
use Digia\InstanceFactory\InstanceFactory;

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
        if($this->request->isPost()){   
            $class=$this->instance(Classe::class,$_POST);
            $class->insert();
            $this->render('classe/creerClasse.html.php');
        }
        
    }
    public function deleteClasse(){
        if($this->request->isPost()){  
            // die($_POST["id"]); 
            $class=new Classe;
            $class->update($_POST["id"]);
            $this->render('classe/listerClasse.html.php');
        }
    }
}
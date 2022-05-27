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
            extract($_POST);
            $class=new Classe;
            $class->delete($id);
            $this->render('classe/listerClasse.html.php');
        }
        
    }
    public function modifierClasse(){
        if($this->request->isGet()){

            }


        if($this->request->isPost()){  

            // dd($_POST);
            extract($_POST);

            if(isset($modifier)){
                $classe=Classe::findById($id);
                // dd($classe);
                $this->render('classe/creerClasse.html.php',$data=[
                    "classe"=>$classe[0]
                ]);
            }else{
                $classe = new Classe();
                $classe->setId($id);
                $classe->setLibelle($libelle);
                $classe->setNiveau($niveau);
                $classe->setFiliere($filiere);
                $classe->update($id);
                $this->redirecToRoute('classes');
            }
           
            // $classe = new Classe();
            // $classe->setId($id);
            // $classe=Classe::findById($id);
            // $classe->setLibelle($libelle);
            // $classe->setNiveau($niveau);
            // $classe->setFiliere($filiere);
        
        


        }
        
    }
}
<?php
namespace App\Controller;
use App\Core\Controller;
use App\Model\User;

class SecurityController extends Controller{
   
    public function authentification(){
        //1-Affichage du formulaire de connexion=>GET
        if($this->request->isGet()){
               
            $this->render('security/login.html.php');

        }
        if($this->request->isPost()){
            $kouconnect=User::findUserByLoginAndPassword($_POST['login'],$_POST['password']);
            // dd($kouconnect);
            if($kouconnect==null){
                $this->render('security/login.html.php');

            }else{
                session_start();
                $_SESSION['user']=$kouconnect;
                // $this->render('professeur/listerProfesseur.html.php');
                // $this->redirecToRoute("lister-professeur");
                $this->render('accueil/accueil.html.php');
            }
               
            

        }

        //2-traitement apres soumission => POST
    }
    public function deconnexion(){

        $this->redirecToRoute("login");
        
    }

}
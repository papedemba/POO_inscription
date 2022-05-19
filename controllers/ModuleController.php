<?php
namespace App\Controller;

use App\Core\Controller;
use App\Model\Module;

class ModuleController extends Controller{
        public function ajouterModule(){

        }
        public function listerModule(){
                if($this->request->isGet()){ 
                      $module=new Module;  
                     $modules = Module::findAll(); 
                //      var_dump($modules);die;
        
                    $this->render('module/listerModule.html.php',$modules);
                }

        }
}
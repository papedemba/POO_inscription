<?php
namespace App\Core;

use App\Exception\RouteNotFoundException;
use App\Controller\SecurityController;
use App\Controller\ClasseController;
use App\Controller\ModuleController;

class Router{
    private Request $request;

    public function __construct(){
       $this->request=new Request; 
    }
    private array $routes=[];
    public function route(string $uri,array $action){
        $this->routes[$uri]=$action;
    }

    public function resolve(){
// var_dump($this->request->getUri()[0]);
        $uri="/".$this->request->getUri()[0];//[0]
    
        if(isset($this->routes[$uri])){
            
                $route=$this->routes[$uri];
                // die('okkkk');

                [$ctrClass,$action]=$route;

                // die('okkk');
              // dd($ctrClass);

                // [$ctrClass]=$route[0]; 
                // [$action]=$route[1];
                // dd("App\\Controller\\".$ctrClass);
                // dd($ctrClass);
                if( class_exists($ctrClass) &&  method_exists($ctrClass,$action) ){
                    
                    
                    $ctrl=new $ctrClass($this->request);//$ctrl=new SecurityController()
                    //  dd($ctrl);
                    // $ctrl->{$action()};//$ctrl->authentificatio()
                    call_user_func(array($ctrl,$action));
                }else{
                throw new RouteNotFoundException();
                }
            }else{
                $obj = new SecurityController($this->request);
                call_user_func(array($obj,"authentification"));
                // throw new RouteNotFoundException();
            }
    }
}

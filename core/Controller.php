<?php
namespace App\Core;

class Controller  {

    protected Request $Request;

    public function __construct(Request $request)
    {
        $this->request=$request;
    }
    public function render(string $path,array $data=[]){
        $yobale = [];
        $yobale["Constantes"]=Constantes::class;

        $yobale["request"]=$this->request;
        extract($yobale);
        ob_start();
        extract($data);
        //dd(Constantes::ROOT()."templates/".$path);
        require_once(Constantes::ROOT()."templates/".$path);
        // die('in render');
        $content_for_views=ob_get_clean();
        // var_dump(Constantes::ROOT());die;
        require_once(Constantes::ROOT()."templates/layout/base.html.php");
        //templates/professeur/listerProfesseur.html.php"
    }
    public function redirecToRoute($uri){
        header("location:".Constantes::WEB_ROOT.$uri);
    }

}
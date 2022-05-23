<?php

namespace App\Core;

class Role{

    private Session $session;
    
    public function __construct(){
        $this->session= new Session;
    }
    public  static function isconnect(){
        return(isset($_SESSION['user']));

    }
    public  static function isRP(){
        return(self::isconnect() && $_SESSION['user']->role=='ROLE_RP');

    }
    public  static function isAC(){
        return(self::isconnect() && $_SESSION['user']->role=='ROLE_AC');

    }
    public  static function isEtudinat(){
        return(self::isconnect() && $_SESSION['user']->role=='ROLE_ETUDIANT');
    }
}
    
    


<?php
namespace App\Core;
use App\Model\User;
class Session{

    private  User $user;
    public function __construct()
    {
        if(session_status()==PHP_SESSION_NONE){
            session_start();
        }
    }
    //Ajouter une donnee dans la session
    public function set(string $key,$data){
        $_SESSION[$key]=$data;
    }
    public function get(string $key){
       return $_SESSION[$key];
    }
    public function getUser(){
        return $this->user;
     }
}
<?php
namespace App\Model;
class RP extends User{

    public function __construct()
    {
        parent::$role="ROLE_RP";
    }
    public static function findAll():array{

        $sql="select*from ".self::$role." where role not like '".self::$role."' "; 
         return [];
     }

}
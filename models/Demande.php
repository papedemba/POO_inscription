<?php
namespace App\Model;
use App\Core\Model;

class Demande extends Model{
    public static function findAll():array{
        $db=self::database();
        $db->connexionBD();
        $sql="select *from ".self::table();
        $result=$db->executeSelect($sql);
        $db->closeConnexio();
        return $result;
    }
    
}
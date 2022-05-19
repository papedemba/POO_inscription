<?php
namespace App\Model;
use App\Core\Model;
class Classe extends Model{


    public function __construct()
    {
        
    }
    // les fonctions navigationnelles

// ManyToMany avec professeur

public function professeurs():array{
    return [];
}

public static function findAll():array{
    $db=self::database();
    $db->connexionBD();
    $sql="select *from ".self::table();
    $result=$db->executeSelect($sql);
    $db->closeConnexio();
    return $result;
}
}
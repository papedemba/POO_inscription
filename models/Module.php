<?php
namespace App\Model;

use App\Controller\ModuleController;
use App\Core\Model;

class Module extends Model{

    
        
    public static function findAll():array{
        $db=self::database();
        $db->connexionBD();
        $sql="select * from module ";
        $result=$db->executeSelect($sql);
        $db->closeConnexio();
        return $result;
    }
}
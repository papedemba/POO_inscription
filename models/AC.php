<?php
namespace App\Model;
use App\Model\User;

class AC extends User{

    // OnetoMany=>Inscription
    // premiere approche
    private array $inscription;
    // 2em approche
    public function inscriptions():array{
        return [];
    }


    public function __construct()
    {
        parent::$role="ROLE_AC";
        $this->inscription=[];
    }
    // public static function findAll():array{

    //     $sql="select*from ".parent::table()." where role  like ROLE_AC "; 
    //     echo $sql;
    //      return [];
    //  }
    //  public function insert():int{
    //     $db=parent::database();
    //     $db->connexionBD();
    //     $sql="INSERT INTO personne ('nomc_omplet','role','login','password') VALUES (?,?,?,?);";
    //     // echo $sql; die;
    //     $result=$db->executeUpdate($sql,[$this->nomComplet,parent::$role,$this->login,$this->password]);
    //     $db->closeConnexio();
    //     // echo $sql;
    //     return $result;
    // }
    public function insert():int{
        $db=parent::database();
        $db->connexionBD();
        $sql="INSERT INTO `personne` (`nomc_omplet`,`role`,`login`,`password`) VALUES (?,?,?,?);";
        $result=$db->executeUpdate($sql,[$this->nomComplet,parent::$role,$this->login,$this->password]);
        $db->closeConnexio();
        echo $sql;
        return $result;
    }
}
<?php
namespace App\Model;

class Professeur extends Personne{
    private string $grade;


    public function __construct()
    {
        parent::$role="ROLE_PROFESSEUR";
    }
    // les fonctions navigationnelles

// ManyToMany avec classe

public function classes():array{
    return [];
}
public static function findAll():array{
    $db=self::database();
    $db->connexionBD();
    $sql="select *from ".self::table()." where role like 'ROLE_PROFESSEUR' and etat like '0'";
    $result=$db->executeSelect($sql);
    $db->closeConnexio();
    return $result;
}
//  public function insert():int{
//     $db=parent::database();
//     $db->connexionBD();
//     $sql="INSERT INTO `personne` (`nomc_omplet`,`role`,`grade`) VALUES (?,?,?);";
//     $result=$db->executeUpdate($sql,[$this->nomComplet,parent::$role,$this->grade]);
//     $db->closeConnexio();
//     echo $sql;
//     return $result;
// }

    /**
     * Get the value of grade
     */ 
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set the value of grade
     *
     * @return  self
     */ 
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }
}
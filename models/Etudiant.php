<?php
namespace App\Model;
class Etudiant extends User{
private string $matricule='';
private string $sexe='';
private string $adresse='';

    public function __construct()
    {
        parent::$role="ROLE_ETUDIANT";
    }

/**
 * Get the value of matricule
 */ 
public function getMatricule()
{
return $this->matricule;
}

/**
 * Set the value of matricule
 *
 * @return  self
 */ 
public function setMatricule($matricule)
{
$this->matricule = $matricule;

return $this;
}

/**
 * Get the value of sexe
 */ 
public function getSexe()
{
return $this->sexe;
}

/**
 * Set the value of sexe
 *
 * @return  self
 */ 
public function setSexe($sexe)
{
$this->sexe = $sexe;

return $this;
}

/**
 * Get the value of adresse
 */ 
public function getAdresse()
{
return $this->adresse;
}

/**
 * Set the value of adresse
 *
 * @return  self
 */ 
public function setAdresse($adresse)
{
$this->adresse = $adresse;

return $this;
}

public static function findAll():array{

    $sql="select*from ".self::table()." where role  like '".self::$role."' "; 
     return [];
 }
 public function insert():int{
    $db=parent::database();
    $db->connexionBD();
    $sql="INSERT INTO personne (`nomc_omplet`,`role`,`login`,`password`,`matricule`,`adresse`,`sexe`) VALUES (?,?,?,?,?,?,?);";
    $result=$db->executeUpdate($sql,[$this->nomComplet,self::$role,$this->login,$this->password,$this->matricule,$this->adresse,$this->sexe]);
    $db->closeConnexio();

    return $result;
}
}
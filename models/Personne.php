<?php
namespace App\Model;
use App\Core\Model;

 abstract class Personne extends Model{
    // les attributs instance
    protected int $id;
    protected string $nomComplet;
    protected static string $role;
    // les attributs classe ou static
    private static int $nbrePersonne;
    
    public function __construct()
    {
        parent::table();
    }
    // les getters et setters
    public function getId():int{
        return $this->id;
    }
    public function getNomComplet():string{
        return $this->nomComplet;
    }
    public static function getNbrePersonne():int{
        return self::$nbrePersonne;
    }
    public function setId(int $id):self{
        $this->id=$id;
        return $this;
    }
    
    public function setNomComplet(string $NomComplet):self{
        $this->nomComplet=$NomComplet;
        return $this;
    }
    public static function setNbrePersonne(int $nbrePersonne):void{
        self::$nbrePersonne=$nbrePersonne;
    }
    

    /**
     * Get the value of role
     */ 
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set the value of role
     *
     * @return  self
     */ 
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

public static function findAll():array{
        
        $sql="select *from ".parent::table()." where role like ?";
        
        return parent::findBy($sql,[get_called_class()::$role]);
    }
    public function insert():int{
        $db=parent::database();
        $db->connexionBD();
        $sql="INSERT INTO personne (`nomc_omplet`,`role`,`login`,`password`) VALUES (?,?,?,?);";
        $result=$db->executeUpdate($sql,[$this->nomComplet,self::$role,$this->login,$this->password]);
        $db->closeConnexio();

        return $result;
    }
}
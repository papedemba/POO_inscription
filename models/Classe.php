<?php
namespace App\Model;
use App\Core\Model;
class Classe extends Model{

        private int $id;
        private string $libelle;
        private string $filiere;
        private string $niveau;

    public function __construct()
    {
        
    }
    
    


    // les fonctions navigationnelles

// ManyToMany avec professeur

public function professeurs():array{
    return [];
}

public static function findAll():array{
    
    $sql="select *from ".self::table();
   
    return self::findBy($sql);
}
public function insert():int{
    $sql="INSERT INTO classe (`libelle`,`filiere`,`niveau`) VALUES (?,?,?);";

    return self::updateby($sql);
}

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of libelle
         */ 
        public function getLibelle()
        {
                return $this->libelle;
        }

        /**
         * Set the value of libelle
         *
         * @return  self
         */ 
        public function setLibelle($libelle)
        {
                $this->libelle = $libelle;

                return $this;
        }

        /**
         * Get the value of filiere
         */ 
        public function getFiliere()
        {
                return $this->filiere;
        }

        /**
         * Set the value of filiere
         *
         * @return  self
         */ 
        public function setFiliere($filiere)
        {
                $this->filiere = $filiere;

                return $this;
        }

        /**
         * Get the value of niveau
         */ 
        public function getNiveau()
        {
                return $this->niveau;
        }

        /**
         * Set the value of niveau
         *
         * @return  self
         */ 
        public function setNiveau($niveau)
        {
                $this->niveau = $niveau;

                return $this;
        }


}
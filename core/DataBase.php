<?php
namespace App\Core;
class DataBase{
    private \PDO|null $pdo=null;
    public function connexionBD():void{
        try {
            //code...
        $this->pdo =new \PDO('mysql:dbname=POO_Inscription;host=127.0.0.1',"root","") ;
            /* die("ok"); */
        } catch (\Exception $e) {
            //throw $th;
            echo  $e->getMessage();
        
        }
    }
    public function closeConnexio():void{
        $this->pdo=null;
    }
    public function executeSelect(string $sql,array $data=[],$single=false):object|array|null {
        $query=$this->pdo->prepare($sql);
        $query->execute($data);
        if($single){
            $result=$query->fetch(\PDO::FETCH_OBJ); 
            if($query->rowCount()==0){
                return null;
            }
                
        }
        else{
            $result=$query->fetchAll(\PDO::FETCH_OBJ);
        }

        return $result;

    }
    public function executeUpdate (string $sql,array $data=[],$single=false):int{
        $query=$this->pdo->prepare($sql);
        $query=$query->execute($data);
        return $query;
        
    }
}
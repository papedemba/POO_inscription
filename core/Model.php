<?php 
 namespace App\Core;

 
 class  model implements IModel{

    protected static DataBase|null $DataBase=null;
    protected static function database():Database{
        return new DataBase();
    }
     public static function  table():string{
            
            $table=get_called_class();
            $table=str_replace("App\\Model\\","",$table);

            $table=($table=="User" or $table=="RP" or $table=="AC" or $table=="Professeur" )? "personne":strtolower($table);
            return $table; 
     }

    public function insert():int{
        return 0;
    }
    public  function update(int $id):int{
        echo self::table();
        return 0;

    }
    public static function delete(int $id):int{
        $db=self::database();
        $db->connexionBD();
        $sql="delete from ".self::table()." where id=?";
        $result=$db->executeUpdate($sql,[$id]);
        $db->closeConnexio();
        

        return $result;
    }
    public static function findAll():array{
        $db=self::database();
        $db->connexionBD();
        $sql="select * from ".self::table();
        $result=$db->executeSelect($sql);
        $db->closeConnexio();
        return $result;
    }
    public static function findById(int $id):object|null{
        $db=self::database();
        $db->connexionBD();
        $sql="select*from '.self::table().' where id=?";
        $result=$db->executeSelect($sql,[$id]);
        $db->closeConnexio();
        return $result;
    }
    public static function findBy(string $sql,array $data=[],$single=false):object|null|array{
        $db=self::database();
        // dd($sql);
        $db->connexionBD();
        $result=$db->executeSelect($sql,$data,$single);
        $db->closeConnexio();
        return $result;
        
    }
    public static function updateBy(string $sql,array $data=[]):int{

        $db=self::database();
        $db->connexionBD();
        $result=$db->executeUpdate($sql,$data);
        $db->closeConnexio();
        return 0;
    }
 }
 
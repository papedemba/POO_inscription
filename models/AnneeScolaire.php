<?php
namespace App\Model;
namespace App\Core\Model;
use App\Core\Model;
class AnneeScolaire extends Model{
   // les fonctions navigationnelles

   // OneToMany

   public function inscriptions():array{
    return [];
}
}
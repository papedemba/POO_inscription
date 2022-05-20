<?php
namespace App\Model;
use App\Core\Model\AnneeScolaire;
class Inscription{
    // les fonctions navigationnelles

// ManyToOne

public function inscrire(){
    
}
public function ac():AC{
$sql="select p*from inscription i personne p where p.id=i.ac_id 
and p.role like 'ROLE_AC'
and i.id=".$this->id;
    return new AC();
}
// ManyToOne
public function anneeScolaire():AnneeScolaire{
    $sql="select a*from annee_scolaire a personne p 
    where a.id=i.annee_id 

    and i.id=".$this->id;
    return new AnneeScolaire();
}

}
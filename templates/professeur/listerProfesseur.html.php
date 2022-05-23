<?php
// use App\Model\Professeur;
// $professeurs = Professeur::findAll();
//var_dump($data);
//
//die('In lister');
//unset($data['Constantes']);
//unset($data['request']);

?>



<table class="table table-hover">
    <thead>
        <tr>
            <th>Nom Complet</th>
            <th>Grade</th>
            <th>Details</th>
        </tr>
    </thead>
    <tbody>
    
      <?php  foreach ($data as $professeur): ?>
            <tr>
             <td> <?=$professeur->nomc_omplet?>  </td> 
             <td> <?=$professeur->grade?> </td>
             <td>
                <button type="button" class="btn btn-success">Modifier</button>
                <button type="button" class="btn btn-danger">Supprimer</button>
              </td>
            </tr>
     <?php endforeach ?>
    </tbody>
</table>

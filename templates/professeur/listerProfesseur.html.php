<?php
// use App\Model\Professeur;
// $professeurs = Professeur::findAll();
// var_dump($professeurs);
//die('In lister');
?>



<table class="table table-hover">
    <thead>

        <tr>
            <th>Nom Complet</th>
            <th>Grade</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($data as $professeur) {
            echo "<tr>";
            echo "<td>".$professeur->nomc_omplet."</td>";
            echo "<td>".$professeur->grade."</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

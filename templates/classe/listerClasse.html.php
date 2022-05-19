<?php
use App\Model\Classe;
$classes = Classe::findAll();
// var_dump($professeurs);
//die('In lister');
?>



<table class="table table-hover">
    <thead>

        <tr>
            <th>libelle</th>
            <th>filiere</th>
            <th>niveau</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($classes as $classe) {
            echo "<tr>";
            echo "<td>".$classe->libelle."</td>";
            echo "<td>".$classe->filiere."</td>";
            echo "<td>".$classe->niveau."</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

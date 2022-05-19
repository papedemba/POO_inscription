<?php

// var_dump($professeurs);
//die('In lister');
?>



<table class="table table-hover">
    <thead>

        <tr>
            <th>libelle Module</th>
            
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($data as $module) {
            echo "<tr>";
            echo "<td>".$module->libelle."</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

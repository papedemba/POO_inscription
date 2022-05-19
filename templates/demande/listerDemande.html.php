<table class="table table-hover">
    <thead>

        <tr>
            <th>Motif</th>
            <th>Etat</th>
            <th>Etudiant</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($data as $demande) {
            echo "<tr>";
            echo "<td>".$demande->motif."</td>";
            echo "<td>".$demande->etat."</td>";
            echo "<td>".$demande->etudiant_id."</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

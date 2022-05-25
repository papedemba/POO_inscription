<?php

// var_dump($professeurs);
//die('In lister');
?>



<table class="table table-dark m-4 ">
    <thead class="dark">

        <tr>
            <th>libelle Module</th>
            <th>Action</th>
            
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($data as $module):?> 
            <tr>
            <td> <?=$module->libelle?></td>
            <td>
                <button type="button" class="btn btn-success">Modifier</button>
                <button type="button" class="btn btn-danger">Supprimer</button>
              </td>
            </tr>
        
        <?php endforeach ?>
    </tbody>
</table>
<
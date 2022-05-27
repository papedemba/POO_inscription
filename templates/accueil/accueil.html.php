<?php 
//  require_once('public/layout/base.html.php');
     use App\Core\Constantes;
     use App\Core\Role;
    //session_start();

?> 
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->
<link rel="stylesheet" href="<?=Constantes::WEB_ROOT.'bootstrap-5.1.3/dist/css/bootstrap.min.css'?>">
<!-- Example single danger button -->
<!-- Example single danger button -->
<?php  if(isset($_SESSION['user'])): ?>

<?php $role=new Role(); if($role::isRP()):  ?>
<div class="btn-group">
  <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Professeur
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="<?=Constantes::WEB_ROOT.'add-prof'?>">Ajouter Professeur</a></li>
    <li><a class="dropdown-item" href="<?=Constantes::WEB_ROOT.'lister-professeur'?>">Lister Professeur</a></li>
  
  </ul>
</div>
<div class="btn-group">
  <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Classe
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="<?=Constantes::WEB_ROOT.'add-classe'?>">Ajouter </a></li>
    <li><a class="dropdown-item" href="<?=Constantes::WEB_ROOT.'classes'?>">lister Classe</a></li>
    <li><a class="dropdown-item" href="<?=Constantes::WEB_ROOT.'modifier-classe'?>">modifier</a></li>
  </ul>
</div>
<div class="btn-group">
  <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Module
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Ajout Module</a></li>
    
    <li><a class="dropdown-item" href="<?=Constantes::WEB_ROOT.'lister-module'?>">Lister Module</a></li>
    
  </ul>

</div>
<?php  endif ?>

<?php  $role=new Role(); if($role::isEtudinat()):   ?>
<div class="btn-group">
  <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Demande
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="<?=Constantes::WEB_ROOT.'lister-demande'?>">Liste Demande</a></li>
    <li><a class="dropdown-item" href="">formuler demande</a></li>
    
  </ul>
</div>
<?php endif; ?>
<?php  $role=new Role(); if($role::isAC()):   ?>

<div class="btn-group">
  <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Inscription
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="<?=Constantes::WEB_ROOT.'inscrire'?>">Inscription</a></li>
    <li><a class="dropdown-item" href="#"></a>Reinscription</li>
    
  </ul>

</div>
<?php  endif ?>
<?php  endif ?>



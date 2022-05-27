<?php
use App\Model\Classe;
$classes = Classe::findAll();
// var_dump($professeurs);
//die('In lister');
?>



<!doctype html>
<html lang="en">
  <head>
  	<title>Table 03</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?=$Constantes::WEB_ROOT?>template/professeur/css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-4 text-center mb-5">
					<h2 class="heading-section">ODC</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h4 class="text-center mb-7">LISTE DES CLASSES</h4>
					<div class="table-wrap">
						<table class="table">
					    <thead class="thead-dark">
					      <tr>
					        <th>LIBELLE</th>
					        <th>FILIERE</th>
					        <th>NIVEAU</th>
                            <th>ACTION</th>
					        
					      </tr>
					    </thead>
					    <tbody>
						<?php  foreach ($classes as $classe): ?>
					      <tr>
					        <th scope="row" class="scope" ><?=$classe->libelle?></th>
					        <td> <?=$classe->filiere?></td>
                            <td> <?=$classe->niveau?></td>
					        <td>
								<div class="btn btn-success">
									<form action="/modifier-classe" method="post">
									<input type="hidden" name="id" value="<?=$classe->id?>">
									<button type="submit" name="modifier" class="btn btn-success">Modifier</button>
									</form>
								</div>
							    <form class="btn btn-secondary" action="/delete-classe" method="post">
									<input type="hidden" name="id" value="<?=$classe->id?>">
                					<button type="submit" class="btn btn-secondary">Supprimer</button> </td>
								</form>
							
					      </tr>
					      
					     
					      
					      
						  <?php endforeach ?>   
					    </tbody>
					  </table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="<?=$Constantes::WEB_ROOT?>template/professeur/js/jquery.min.js"></script>
  <script src="<?=$Constantes::WEB_ROOT?>template/professeur/js/popper.js"></script>
  <script src="<?=$Constantes::WEB_ROOT?>template/professeur/js/bootstrap.min.js"></script>
  <script src="<?=$Constantes::WEB_ROOT?>template/professeur/js/main.js"></script>

	</body>
</html>

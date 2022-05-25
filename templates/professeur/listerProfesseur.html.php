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
				<div class="col-md-4 text-center mb-2">
					<h2 class="heading-section">ODC</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h4 class="text-center mb-4">LISTE DES PROFESSEUR</h4>
					<div class="table-wrap">
						<table class="table">
					    <thead class="thead-primary">
					      <tr>
					        <th>NOM COMPLET</th>
					        <th>GRADE</th>
					        <th>ACTION</th>
					        
					      </tr>
					    </thead>
					    <tbody>
						<?php  foreach ($data as $professeur): ?>
					      <tr>
					        <th scope="row" class="scope" ><?=$professeur->nomc_omplet?></th>
					        <td> <?=$professeur->grade?></td>
					        <td><button type="button" class="btn btn-success">Modifier</button>
                				<button type="button" class="btn btn-danger">Supprimer</button> </td>
							
					      </tr>
					      
					     
					      
					      
						  <?php endforeach ?>   
					    </tbody>
					  </table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>


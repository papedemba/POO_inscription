<?php
use App\Core\Constantes;
	//die($Contantes::WEB_ROOT);
	$Contantes=new Constantes();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v1 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="<?=$Contantes::WEB_ROOT?>template/login/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="<?=$Contantes::WEB_ROOT?>template/login/css/style.css">
	</head>

	<body>

		<div class="wrapper" style="background-image: url('<?=$Contantes::WEB_ROOT?>template/login/images/bg-registration-form-1.jpg');">
			<div class="inner">
				<div class="image-holder">
					<img src="<?=$Contantes::WEB_ROOT?>template/login/images/pro.jpg" alt="">
				</div>
				<form method="post" action="<?=$Constantes::WEB_ROOT."login"?>" >
					<h3>CONNEXION</h3>
					
					<div class="form-wrapper">
						<input type="text" name="login" placeholder="Username" class="form-control">
						<i class="zmdi zmdi-account"></i>
					</div>
					
					
					<div class="form-wrapper">
						<input type="password" name="password" placeholder="Password" class="form-control">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<button type="submit">Connecter
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
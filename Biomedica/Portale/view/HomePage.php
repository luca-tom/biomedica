<?php
error_reporting(0);  
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Istituto Mendel</title>

		<!-- Bootstrap -->
		<!-- css -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<link href="HomePage.css" rel="stylesheet" type="text/css">
		<!-- javascript -->
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	</head>
	<body>
		
		
		
		
		
		<h1><span style="color:#228B22"><strong><p class="text-center">ISTITUTO DI RICERCA MENDEL</p> </strong> </span></h1>
		<h2><em><p class="text-center">Studio e analisi della Sindrome di Joubert</p></em></h2>
		<p class="text-center">
		<img src="logoMendel.jpg" id="imglogo" style="margin-left: 7.5cm; margin-top: 1cm; width: 6.5cm; height: 8cm;" alt="immagine non visualizzata"/>
		</p>
		<div class="container">
		<form class="form-signin" id="formLogin" method="post" action="../persistence/Login.php" style="margin-right: 1cm; margin-top:-1cm" role="form">
			<h2 class="form-signin-heading" style="color:#228B22">Admin login</h2>
				<input name="myusername" type="text" class="form-control"  placeholder="Administrator" required autofocus/>
        		<input name="mypassword" type="password" class="form-control" placeholder="Password" required/>
			<button name="submit" onclick="" class="btn btn-lg btn-success btn-block" type="submit">login</button> <!--onclick?! -->
		</form>
		
		</div> 
		
		<?php
		session_start();
		if (isset($_SESSION["count"]) ) {
		$count = $_SESSION["count"];
				if ($count == 0) {
				print "<div class='alert alert-danger' role='alert' style='width:5cm;margin-left: 26.5cm; margin-top:-2cm'>
					<strong>Attenzione!</strong><br>
					Username o Password errati.<br>
					<a class='alert-link'></a>
					</div>";
				}
		}
		//provaaaaaaaaa
		?>
		
		
		
		<p class="text-center">
		<button type="button"  class="btn btn-success" onclick="location.href='QueryUser.php'" value="go" style="margin-top: -7cm; margin-left: 6cm" class="buttonStar">
			Effettua una ricerca
		</button>
		</p>
		
		<p class="text-center">
		<img src="logoRomaTre.jpg" id="imglogoRM3" style="margin-top: 2cm; margin-right:4cm" alt="immagine non visualizzata"/>
		</p>
		
		
		<address>
			<p class="text-center"id="add" style="margin-right: 1cm; margin-top: 1.7cm">
				<strong>Con la collaborazione di:</strong>
				<br>
				<em>Lorenzo Martucci</em>
				<br>
				<em>Claudia Raponi</em>
				<br>
				<em>Luca Tomaselli</em>
				<br>
			</p>
		</address>
		
		

		<address>
			<p class="text-center" style="margin-top: 2cm; margin-right: 20cm">
				<strong>Istituto CSS-Mendel</strong>
				<br>
				Viale Regina Margherita 261, 00198 Roma
				<br>
				dal Lunedi' al Venerdi', 09:00-18:00
				<br>
				<abbr title="Phone">Tel:</abbr> 06 4416 0515
			</p>
		</address>
		
	</body>
</html>
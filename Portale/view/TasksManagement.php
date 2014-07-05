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
		<link href="TemplateAdmin.css" rel="stylesheet" type="text/css">
		<!-- javascript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		
		

	</head>
	<body id="body">
		<img src="logoMendelSS.jpg" id="imglogo" style="margin-left: 8.6cm; margin-top: 0cm" alt="immagine non visualizzata" width="130" height="150"/>
		
		<h3><br>Studio e analisi<br>della Sindrome di Joubert</h3>	
	
		<div class="panel panel-info"style="width:5cm;height:3cm;  margin-top:-2cm;  margin-left: 30cm">
  			<div class="panel-heading">
    		<h3 class="panel-title"> </h3>
			</div>
  			<div class="panel-body">
    		<span class="glyphicon glyphicon-user"></span>
    			<?php
    			session_start();
				if (isset($_SESSION["myusername"])) {
					print "Benvenuto <strong> ".$_SESSION["myusername"];
				}
				else if (isset($_COOKIE["myusername"])) {
					print "Benvenuto <strong> ".$_COOKIE["myusername"];
				}
					
				else
					print "Sessione scaduta";			
    			?>
    			</strong><br><br>
    		<button type="button" class="btn btn-primary btn-sm"style="margin-left: 3cm" onclick="location.href='../persistence/Logout.php'">Esci</button>
  			</div>
		</div>
		
		
		
		<p id="chooseText" style="margin-left: 8cm; margin-top: 2cm"><strong>Scegli una tra le seguenti l'attivit&agrave:</strong></p>
		
		<p class="text-center">
		<button type="button"  class="btn btn-success" onclick="location.href='InsertSample.php'" value="go" 
		style="margin-top: 2cm; margin-left: -9.8cm" class="buttonStar">
			Inserisci campioni
		</button>
		<div class="well" style="width: 6cm; margin-left: 10cm; margin-top: 0.5cm">
  		<p align="center">Permette di aggiungere all'archivio nuovi campioni, sia singoli che multipli purch&egrave; raccolti in un file Excel in base allo standard.</p> 
		</div>
		</p>

		<p class="text-center">
		<button type="button"  class="btn btn-success" onclick="location.href='UpdateSample.php'" value="go" 
		style="margin-top: -11.5cm; margin-left: 6.2cm" class="buttonStar">
			Modifica campioni
		</button>
		<div class="well" style="width: 6cm; margin-left: 18cm; margin-top: -5.3cm">
  		<p align="center">Permette di correggere campioni gi&aacute presenti nell'archivio, intervenendo sulle singole specifiche relative al paziente.</p> 
		</div>
		</p>
		
		<p class="text-center">
		<button type="button"  class="btn btn-success" onclick="location.href='QueryAdmin.php'" value="go" 
		style="margin-top: -11.5cm; margin-left: 22cm" class="buttonStart">
			Effettua una ricerca
		</button>
		<div class="well" style="width: 6cm; margin-left: 26cm; margin-top: -5.3cm">
  		<p align="center">Permette di interrogare l'archivio per effettuare ricerche incrociate sui pazienti affetti dalla sindrome.</p> 
		</div>
		</p>
		
		<ul class="pager" style="margin-top: 1.2cm; margin-left: -30.5cm" onclick="location.href='HomePage.php'">
  		<li class="prev"><a href="#"> &#8592 Homepage</a></li>
		</ul>
		
</body>
</html>
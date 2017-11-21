<html>
<head><title>GSB : Suivi de la Visite médicale </title></head>
<body bgcolor="white" text="5599EE">
<div name="haut" style="margin: 2 2 2 2 ;height:10%;"><h1><a href="index.php?uc=accueil"><img src="images/logo.jpg"/></a>Gestion des visites</h1></div>
	<?php
			If (!empty( $_SESSION['Praticien'])||!empty( $_SESSION['Visiteur'])) // si quelqu'un est connecté
			{ 
				?>
				<a href='index.php?uc=accueil'>se deconnecter</a>                                                                      
			<?php } ?>
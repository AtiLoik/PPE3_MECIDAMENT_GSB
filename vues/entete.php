<!DOCTYPE html>
<head>
	<title>Gestion des visites</title>
    <meta charset="utf-8">

   <link href="styles/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>
<a href="index.php?uc=accueil"><img src="images/logo.jpg"/></a>
	<h2>Gestion des visites</h2>
	<?php
			If (!empty( $_SESSION['login'])) // si quelqu'un est connecté
			{ 
				<a href="index.php?uc=accueil">se deconnecter</a>
			<?php } ?>
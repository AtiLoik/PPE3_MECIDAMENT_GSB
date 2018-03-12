<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>Gsb</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="styles/style.css" />
<script type="text/javascript" src="js/jquery.dropotron-1.0.js"></script>
<script type="text/javascript">
	$(function() {
		$('#menu > ul').dropotron({
			mode: 'fade',
			globalOffsetY: 11,
			offsetY: -15
		});
	});
</script>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="index.php">Suivi de la visite médicale</a></h1>
		</div>
		<div id="slogan">
		<?php
			If (!empty( $_SESSION['Praticien'])||!empty( $_SESSION['Visiteur'])) // si quelqu'un est connecté
			{ 
			?>
				<a class="btn" href="index.php?uc=authentification&action=deconnexion">se deconnecter</a>                                                                      
			<?php 
			}
			else{

			} 
			?>			
		</div>
	</div>
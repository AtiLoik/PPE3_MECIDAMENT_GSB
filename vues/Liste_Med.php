<html>
<head>
	<title>formulaire MEDICAMENT</title>
	<style type="text/css">
		<!-- body {background-color: white; color:5599EE; } 
			label.titre { width : 180 ;  clear:left; float:left; } 
			.zone { width : 30car ; float : left; color:7091BB } -->
	</style>
</head>
<body>
<div name="haut" style="margin: 2 2 2 2 ;height:6%;"><h1><img src="logo.jpg" width="100" height="60"/>Gestion des visites</h1></div>
<div name="gauche" style="float:left;width:18%; background-color:white; height:100%;">
	<h2>Outils</h2>
	<ul><li>Comptes-Rendus</li>
		<ul>
			<li><a href="" >Nouveaux</a></li>
			<li>Consulter</li>
		</ul>
		<li>Consulter</li>
		<ul><li><a href="index.php?uc=Medicament&action=Afficher" >Médicaments</a></li>
			<li><a href="" >Praticiens</a></li>
			<li><a href="" >Autres visiteurs</a></li>
		</ul>
	</ul>
</div>
<div name="droite" style="float:left;width:80%;">
	<div name="bas" style="margin : 10 2 2 2;clear:left;background-color:77AADD;color:white;height:88%;">
		<p><a href="index.php?uc=Medicament&action=Ajouter">Ajouter un médicament</a></p>

<?php
	include ('modeles/monpdo.php');
	include ('modeles/Medicament.class.php');

	echo "<table>";
	echo "<tr><td>Depot Legal</td><td>Famille</td><td>Nom Commercial</td><td>Composition</td><td>Effet</td><td>Contre Indication</td><td>Prix</td></tr>";
	$listMedoc = Medicament::getAll();
	foreach($listMedoc as $lesMedoc)
	{
		echo "<tr>";
		echo "<td>".$lesMedoc->MED_DEPOTLEGAL."</td>";
		echo "<td>".$lesMedoc->FAM_CODE."</td>";
		echo "<td>".$lesMedoc->MED_NOMCOMMERCIAL."</td>";
		echo "<td>".$lesMedoc->MED_COMPOSITION."</td>";
		echo "<td>".$lesMedoc->MED_EFFET."</td>";
		echo "<td>".$lesMedoc->MED_CONTREINDIC."</td>";
		echo "<td>".$lesMedoc->MED_PRIXECHANTILLON."</td>";
		echo "<td> <a href = 'index.php?uc=Medicament&action=Modifier'>Afficher</a> </td>";
		//echo "<td> <a href = 'ModifArtiste.php'?action=supprimer>Supprimer</a> </td>";
		echo "</tr>";
	}
	echo "</table>";
?>

	</div>
</div>
</body>
</html>
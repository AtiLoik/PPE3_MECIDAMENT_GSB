<html>
<head>
	<title>formulaire MEDICAMENT</title>
	<style type="text/css">
		<!-- body {background-color: white; color:5599EE; } 
			label.titre { width : 180 ;  clear:left; float:left; } 
			.zone { width : 30car ; float : left; color:7091BB } -->
	</style>
</head>
<div id="page">
		<p><a href="index.php?uc=Medicament&action=Ajouter">Ajouter un médicament</a></p>

<?php
	echo "<table>";
	echo "<tr><td>Depot Legal</td><td>Famille</td><td>Nom Commercial</td><td>Composition</td><td>Effet</td><td>Contre Indication</td><td>Prix</td></tr>";
	$listMedoc = Medicaments::getAll();
	foreach($listMedoc as $lesMedoc)
	{
		echo "<tr>";
		echo "<td>".$lesMedoc->getDepotLegal()."</td>";
		echo "<td>".$lesMedoc->getCode()."</td>";
		echo "<td>".$lesMedoc->getNomCommercial()."</td>";
		echo "<td>".$lesMedoc->getComposition()."</td>";
		echo "<td>".$lesMedoc->getEffet()."</td>";
		echo "<td>".$lesMedoc->getContreIndic()."</td>";
		echo "<td>".$lesMedoc->getPrixEchantillon()."</td>";
		echo "<td> <a href = 'index.php?uc=Medicament&action=Modifier'>Afficher</a> </td>";
		//echo "<td> <a href = 'ModifArtiste.php'?action=supprimer>Supprimer</a> </td>";
		echo "</tr>";
	}
	echo "</table>";
?>

</div>

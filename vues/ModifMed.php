<?php
	
	include ("modeles/Medicament.class.php");
	var_dump($_GET['Rech']);
	$leMedoc = Medicament::Modifier($_GET['Rech']);
	foreach ($leMedoc as $Medoc)
	{
		echo "<table>";
		echo "<tr>";
		echo "<td> Depot Legal: ".$Medoc->getDepotLegal()."</td>";
		echo "<td> Code: ".$Medoc->getCode()."</td>";
		echo "<td> Nom Commercial: ".$Medoc->getNomCommercial()."</td>";
		echo "<td> Composition: ".$Medoc->getComposition()."</td>";
		echo "<td> Effet: ".$Medoc->getEffet()."</td>";
		echo "<td> Contre Indication: ".$Medoc->getContreIndic()."</td>";
		echo "<td> Prix: ".$Medoc->getPrixEchantillon()."</td>";
		echo "</tr>";
		echo "</table>";
	}
	
?>
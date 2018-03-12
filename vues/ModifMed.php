<?php
	
	require_once("modeles/class.medicaments.inc.php");
	$leMedoc = Medicaments::findById($_GET['Rech']);
	foreach ($leMedoc as $Medoc)
	{
		echo "<table>";
		echo "<tr>";
		echo "<td> Depot Legal:</td>";
		echo "<td> Code:</td>";
		echo "<td> Nom Commercial:</td>";
		echo "<td> Composition:</td>";
		echo "<td> Effet:</td>";
		echo "<td> Contre Indication:</td>";
		echo "<td> Prix:</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> ".$Medoc->getDepotLegal()."</td>";
		echo "<td> ".$Medoc->getCode()."</td>";
		echo "<td> ".$Medoc->getNomCommercial()."</td>";
		echo "<td> ".$Medoc->getComposition()."</td>";
		echo "<td> ".$Medoc->getEffet()."</td>";
		echo "<td> ".$Medoc->getContreIndic()."</td>";
		echo "<td> ".$Medoc->getPrixEchantillon()."</td>";
		echo "</tr>";
		echo "</table>";
	}
	
?>
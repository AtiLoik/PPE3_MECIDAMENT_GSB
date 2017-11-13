<?php
	include ('monpdo.php');

	echo "<table>";
	$listMedoc = getAll();
	foreach($listMedoc as $lesMedoc)
	{
		echo "<tr><td>".$lesMedoc->id."</td>";
		echo "<td>".$lesMedoc->nom."</td>";
		echo "<td> <a href = 'ModifArtiste.php'?action=afficher>Afficher</a> </td>";
		echo "<td> <a href = 'ModifArtiste.php'?action=supprimer>Supprimer</a> </td> </tr>";
	}
	echo "</table>";
?>
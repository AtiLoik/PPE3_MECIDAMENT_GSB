<?php
include ('modeles/monpdo.php');
include ('Medicament.php');

	if(!empty($_GET['action']))
	{
		if($_GET['action'] == 'afficher')
		{
			$artist = Medicament::findById($_GET['action']->id);

		}
		//if($_GET['action'] == 'supprimer')
		//{
			//Medicament::supprimerArtist($_GET['action']->id);
		//}
	}
?>
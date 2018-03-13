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
	<?php
			If (!empty( $_SESSION['Admin'])) // si quelqu'un est connecté
			{ 
			?>
				<p><a href="index.php?uc=Medicament&action=Ajouter">Ajouter un médicament</a></p>                                                                      
			<?php 
			}
			else{

			} 
			?>				
	<table>
	<tr><td>Depot Legal</td><td>Famille</td><td>Nom Commercial</td><td>Composition</td><td>Effet</td><td>Contre Indication</td><td>Prix</td></tr>

	<?php
	if(!empty($_REQUEST['id']))
	{ // si on demande une modification d'un medicament
			$listMedoc = Medicaments::findById($_REQUEST['id']);
	}
	else
	{
		$listMedoc = Medicaments::getAll();
	}
	
	foreach($listMedoc as $lesMedoc)
	{
		$id = $lesMedoc->getDepotLegal();
		$code =$lesMedoc->getCode();
		$NomCommercial = $lesMedoc->getNomCommercial();
		$Composition = $lesMedoc->getComposition();
		$Effet = $lesMedoc->getEffet();
		$ContreIndic = $lesMedoc->getContreIndic();
		$PrixEchantillon = $lesMedoc->getPrixEchantillon();
	?>
		<tr>
		<td><?php echo $id ?></td>
		<td><?php echo $code ?></td>
		<td><?php echo $NomCommercial ?></td>
		<td><?php echo $Composition ?></td>
		<td><?php echo $Effet ?></td>
		<td><?php echo $ContreIndic ?></td>
		<td><?php echo $PrixEchantillon ?></td>
		
	<?php
	if(!empty($_REQUEST['id']))
	{ 
		
	}
	else
	{
		?>
		<td> <a href = 'index.php?uc=Medicament&action=Afficher&id=<?php echo $id ?>'>Afficher</a><br>
		<?php If (!empty( $_SESSION['Admin']))
		{?>

		<a href="index.php?uc=Medicament&action=Modifier&id=<?php echo $id ?>">Modifier</a>
		<a href = 'index.php?uc=Medicament&action=Supprimer&id=<?php echo $id ?>'>Supprimer</a></td>
		<?php 
		}	
	}?>
		</tr>
		<?php
	}
	?>
</table>
<div id="page">
<?php 

	$action = $_REQUEST['action'];


switch($action) //suivant le contrôleur dans uc
{
	case 'Ajouter':
		include("vues/Medicament.php");  //page d'accueil
		break;

	case 'Modifier':
		include("vues/ModifMed.php");
		break;
		
	case 'Afficher' :
		include("vues/Liste_Med.php");
		break;
}
include("vues/pied.php") ;// pied de site
/*include ("vues/entete.php");
include ("vues/menu.php");*/
?>
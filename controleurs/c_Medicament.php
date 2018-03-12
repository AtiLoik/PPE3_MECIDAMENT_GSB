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

	case 'VerifForm' :
					Medicaments::ajouter($_POST['MED_DEPOTLEGAL'],$_POST['FAM_CODE'],$_POST['MED_NOMCOMMERCIAL'],$_POST['MED_COMPOSITION'],$_POST['MED_EFFETS'],$_POST['MED_CONTREINDIC'],$_POST['MED_PRIXECHANTILLON']);
					header("refresh: 0;url=index.php?uc=Medicament&action=Afficher ");
		break;
}
include("vues/pied.php") ;// pied de site
/*include ("vues/entete.php");
include ("vues/menu.php");*/
?>
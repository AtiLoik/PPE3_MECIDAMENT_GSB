<?php
require_once("modeles/class.medicaments.inc.php");

	$action = $_REQUEST['action'];

switch($action) //suivant le contrôleur dans uc
{
	case 'Ajouter':
		include("vues/Medicament.php");  //page d'accueil
		break;
		
	case 'authentification' :
		include("controleurs/c_Connexion.php");
		break;
}
include("vues/pied.php") ;// pied de site
/*include ("vues/entete.php");
include ("vues/menu.php");*/
?>
<?php
session_start();
require_once("modeles/class.medicaments.inc.php");
require_once("modeles/class.connexion.inc.php");
require_once("modeles/monPdo.inc.php");

if(!isset($_REQUEST['uc']))  // si le contrôleur n'est pas défini (donc première venue sur le site
     $uc = 'authentification';        //on lui affecte connexion
else
	$uc = $_REQUEST['uc'];

switch($uc) //suivant le contrôleur dans uc
{
	case 'accueil':
		include("vues/entete.php");
		include("vues/accueil.php");  //page d'accueil
		break;
		
	case 'Medicament':
		include ("controleurs/c_Medicament.php");
		break;

	case 'authentification' :
		include("controleurs/c_Connexion.php");
		break;
}
include("vues/pied.php") ;// pied de site
/*include ("vues/entete.php");
include ("vues/menu.php");*/
?>
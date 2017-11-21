<div id="page">
<?php
if(!isset($_REQUEST['action']))
     $action = 'connexion';        
else
	$action = $_REQUEST['action'];


switch($action)
{ 
	case 'connexion': //pour afficher le formulaire de connexion
		
			include("vues/connexion.php");
			break;

	case 'verifConnexion':
			if(!empty($_POST['login'])&&!empty($_POST['mdp'])&&!empty($_POST['type']))
					{
						$laConnexion=Connexion::ConnexionUtilisateur($_POST['login'],$_POST['mdp'],$_POST['type']);
							if($laConnexion=="0")
							{
								header("refresh: 0;url=index.php?uc=authentification&action=connexion"); 
							}
							if($laConnexion=="1")
							{
								if ($_POST['type']=="1") {
									$_SESSION['Praticien']=$_POST['login'];
								header("refresh: 0;url=index.php?uc=accueil");
								}
								else{
									$_SESSION['Visiteur']=$_POST['login'];
								header("refresh: 0;url=index.php?uc=accueil");
								}
								
							}
						}
					break;
	case 'deconnexion':
			session_destroy();
			header("refresh: 0;url=index.php");

}
?>
</div>
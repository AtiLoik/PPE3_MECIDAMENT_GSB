<?php
if(!isset($_REQUEST['action']))
     $action = 'connexion';        
else
	$action = $_REQUEST['uc'];

switch($action)
{ 
	case 'connexion': //pour afficher le formulaire de connexion
		{
			include("vues/connexion.php");
			break;
		}
	case 'verifConnexion':
			if(!empty($_POST['login'])&&!empty($_POST['mdp']))
					{
						$laConnexion=Connexion::ConnexionUtilisateur($_POST['login'],$_POST['mdp']);
						var_dump($laConnexion);
						if($laConnexion=="0")
						{
							header("refresh: 0;url=index.php?uc=authentification&action=connexion"); 
						}
						else
						{
							$_SESSION['login']=$_POST['login'];
							header("refresh: 0;url=index.php?uc=accueil");
						}
						
					}
					break;
	case 'deconnexion':
			session_destroy();
			header("refresh: 0;url=index.php");

}
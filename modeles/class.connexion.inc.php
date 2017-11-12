<?php
class Connexion {
	private $login;
	private $mdp;

	public function getLogin()
    {
        return $this->login;
    }
    public function setLogin($value)
    {
        $this->login=$value;  
    }
    public function getMdp()
    {
        return $this->mdp;
    }
    public function setMdp($value)
    {
        $this->mdp=$value;  
    }

    public static function ConnexionUtilisateur($login,$mdp)
    {
    	$sql="select * from utilisateur where login= :login and mdp= :mdp ";
    	$resultat=MonPdo::getInstance()->prepare($sql);
    	$resultat->bindParam(':login', $login);
        $resultat->bindParam(':mdp', $mdp);
        $resultat->execute();
        if($resultat->fetch()==false)
        {
        	return 0;
        }
        else{
        	return 1;
        }
        
    }
}
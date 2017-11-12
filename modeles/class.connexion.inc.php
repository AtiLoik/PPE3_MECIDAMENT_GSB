<?php
class Connexion {
	private $login;
	private $mdp;
    private $type;

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
    public function getType()
    {
        return $this->type;
    }
    public function setType($value)
    {
        $this->type=$value;
    }

    public static function ConnexionUtilisateur($login,$mdp,$type)
    {
    	$sql="select * from connexion where login= :login and motdepasse= :mdp and type= :type ";
    	$resultat=MonPdo::getInstance()->prepare($sql);
    	$resultat->bindParam(':login', $login);
        $resultat->bindParam(':mdp', $mdp);
        $resultat->bindParam(':type', $type);
        $resultat->execute();
        if($resultat->fetch()==false)
                {
                	return 0;
                }
                else
                {
                    
                return 1;

                }
        
    }
    public function Type()
    {
        $sql="SELECT * FROM type_connexion " ;
        $resultat=MonPdo::getInstance()->query($sql);
        $lesTypes=$resultat->fetchAll();
        return $lesTypes;
        throw new Exception("Problème dans l'execution de la requête.") ;
    }
    
}
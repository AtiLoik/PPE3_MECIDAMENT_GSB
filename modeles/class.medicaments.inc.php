<?php

class Medicaments{

	private $MED_DEPOTLEGAL;
    private $FAM_CODE;
    private $MED_NOMCOMMERCIAL;
    private $MED_COMPOSITION;
    private $MED_EFFET;
    private $MED_CONTREINDIC;
    private $MED_PRIXECHANTILLON;

    public function getDepotLegal()
    {
        return $this->MED_DEPOTLEGAL;
    }
    public function getCode()
    {
        return $this->FAM_CODE;
    }
    public function getNomCommercial()
    {
        return $this->MED_NOMCOMMERCIAL;
    }
    public function getComposition()
    {
        return $this->MED_COMPOSITION;
    }
    public function getEffet()
    {
        return $this->MED_EFFET;
    }
    public function getContreIndic()
    {
        return $this->MED_CONTREINDIC;
    }
    public function getPrixEchantillon()
    {
        return $this->MED_PRIXECHANTILLON;
    }
    public function __construct()
    {
        
    }
    public static function getAll()
    {
        $sql="SELECT * FROM medicaments " ;
        $resultat=MonPdo::getInstance()->query($sql);
        $lesMedicaments=$resultat->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Medicaments');
        return $lesMedicaments;
		throw new Exception("Problème dans l'execution de la requête.") ;
    }

}
?>

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
            $sql = "SELECT * FROM medicaments";
            $resultat = MonPdo::getInstance()->query($sql);
            $lesMedoc = $resultat->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "Medicaments");
            return $lesMedoc;
            throw new Exception("Problème dans l'execution de la requête.") ;
        }

        public static function findById($id)
        {
            $req = "select * from medicaments where MED_DEPOTLEGAL = ".$id;
            $monPdo = MonPdo::getInstance();
            $result = $monPdo->query($req);
            $final = $result->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "Medicaments");
            return $final;
        }
    public function ajouter()
    {
        $sql = "Insert into medicaments values($POST_MED_DEPOTLEGAL,$POST_FAM_CODE,$POST_MED_NOMCOMMERCIAL,$POST_MED_COMPOSITION,$POST_MED_EFFETS,$POST_MED_CONTREINDIC,$POST_MED_PRIXECHANTILLON)";
            $resultat = MonPdo::getInstance()->query($sql);
            
            throw new Exception("Problème dans l'execution de la requête.") ;
    }

    public static function Modifier($id)
        {
            $req = "SELECT * FROM medicaments where MED_DEPOTLEGAL = ".$id."";
            $monPdo = MonPdo::getInstance();
            $result = $monPdo->query($req);
            $final = $result->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "Medicament");
            return $final;
        }
}
?>

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
    public static function ajouter($fam_code,$NomCommercial,$composition,$effets,$contreindic,$prixechantillion)
    {
        $sql = "Insert into medicaments (`FAM_CODE`, `MED_NOMCOMMERCIAL`, `MED_COMPOSITION`, `MED_EFFET`, `MED_CONTREINDIC`, `MED_PRIXECHANTILLON`) values(:FAM_CODE,:MED_NOMCOMMERCIAL,:MED_COMPOSITION,:MED_EFFETS,:MED_CONTREINDIC,:MED_PRIXECHANTILLON)";
        $resultat=MonPdo::getInstance()->prepare($sql);
        $resultat->bindParam(':FAM_CODE',$fam_code);
        $resultat->bindParam(':MED_NOMCOMMERCIAL',$NomCommercial);
        $resultat->bindParam(':MED_COMPOSITION',$composition);
        $resultat->bindParam(':MED_EFFETS',$effets);
        $resultat->bindParam(':MED_CONTREINDIC',$contreindic);
        $resultat->bindParam(':MED_PRIXECHANTILLON',$prixechantillion);
        $resultat->execute();
    }
    public static function Modifier($id,$fam_code,$NomCommercial,$composition,$effets,$contreindic,$prixechantillion)
    {
        $sql = "Update medicaments set :FAM_CODE,:MED_NOMCOMMERCIAL,:MED_COMPOSITION,:MED_EFFETS,:MED_CONTREINDIC,:MED_PRIXECHANTILLON where MED_DEPOTLEGAL= (:DEPOTLEGAL) ";
        $resultat=MonPdo::getInstance()->prepare($sql);
        $resultat->bindParam(':FAM_CODE',$fam_code);
        $resultat->bindParam(':MED_NOMCOMMERCIAL',$NomCommercial);
        $resultat->bindParam(':MED_COMPOSITION',$composition);
        $resultat->bindParam(':MED_EFFETS',$effets);
        $resultat->bindParam(':MED_CONTREINDIC',$contreindic);
        $resultat->bindParam(':MED_PRIXECHANTILLON',$prixechantillion);
        $resultat->bindParam(':DEPOTLEGAL',$id);
        $resultat->execute();
    }
    public static function supprimer($id)
    {
        $sql="delete from medicaments where MED_DEPOTLEGAL= (:id) " ;
        $resultat=MonPdo::getInstance()->prepare($sql);
        $resultat->bindParam(':id', $id);
        $resultat->execute();
    }
}
?>
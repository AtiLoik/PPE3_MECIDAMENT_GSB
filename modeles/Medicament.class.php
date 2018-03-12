<?php
	class Medicament
	{
		public static function getAll()
		{
			$sql = "SELECT * FROM medicaments";
			$resultat = MonPdo::getInstance()->query($sql);
			$lesMedoc = $resultat->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "Medicament");
			return $lesMedoc;
		}

		public static function Modifier($id)
		{
			$req = "SELECT * FROM medicaments where MED_DEPOTLEGAL = ".$id;
			$monPdo = MonPdo::getInstance();
			$result = $monPdo->query($req);
			$final = $result->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "Medicament");
			return $final;
		}
	}
?>
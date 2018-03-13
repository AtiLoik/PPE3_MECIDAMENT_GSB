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

		
	}
?>
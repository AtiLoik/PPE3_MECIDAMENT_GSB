<?php
public static function getAll()
		{
			$sql = "SELECT * FROM artist";
			$resultat = MonPdo::getInstance()->query($sql);
			$lesArtist = $resultat->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "Artist");
			return $lesArtist;
		}
?>
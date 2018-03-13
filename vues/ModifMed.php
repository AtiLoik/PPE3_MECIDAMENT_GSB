<div id="page">
	<div id="content">
		<div class="box">
		<?php
		// si la variable $_REQUEST['numart'] est vide c'est qu'il s'agit d'un nouvel artiste à créer
		if(!empty($_REQUEST['id'])){ // si on demande une modification d'un artiste
			$leMedoc = Medicaments::findById($_REQUEST['id']);
			foreach ($leMedoc as $unMedoc) {
				$id = $_REQUEST['id'];
			$code =$unMedoc->getCode();
			$NomCommercial = $unMedoc->getNomCommercial();
			$Composition = $unMedoc->getComposition();
			$Effet = $unMedoc->getEffet();
			$ContreIndic = $unMedoc->getContreIndic();
			$PrixEchantillon = $unMedoc->getPrixEchantillon();
			}
			
		}
		?>
			<h2>Fiche Medicament</h2>
			<section>
				<form action='index.php?uc=Medicament&action=VerifForm' method='post'>
				<input type='hidden' name="idMedoc" value="<?php if(!empty($id)){echo $id;}?>">
				<label for "nomMedoc">Nom du Medicament</label> <input type="text" name="nomMedoc" id="nomMedoc" 
				value="<?php if(!empty($_REQUEST['id'])){echo $NomCommercial;} ?>"><br>
				<label for "Famille">Famille</label> <input type="text" name="Famille" id="Famille" 
				value="<?php if(!empty($_REQUEST['id'])){echo $code;} ?>"><br>
				<label for "Composition">Composition</label> <input type="text" name="Composition" id="Composition" value="<?php if(!empty($_REQUEST['id'])){echo $Composition;} ?>"><br>
				<label for "Effet">Effet</label> <input type="text" name="Effet" id="Effet" 
				value="<?php if(!empty($_REQUEST['id'])){echo $Effet;} ?>"><br>
				<label for "ContreIndic">Contre Indication </label> <input type="text" name="ContreIndic" id="ContreIndic" value="<?php if(!empty($_REQUEST['id'])){echo $ContreIndic;} ?>"><br>
				<label for "Prix">Prix Echantillon</label> <input type="text" name="Prix" id="Prix" 
				value="<?php if(!empty($_REQUEST['id'])){echo $PrixEchantillon;} ?>"><br>
				<input type="submit" value="<?php if(!empty($id)){echo "Modifier le Medicament";}else{echo "Ajouter Medicament";} ?>" />
				</form>
			</section>
		</div>
	</div>
	<br class="clearfix" />
</div>
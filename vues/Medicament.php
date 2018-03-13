<div id="page">
	<div id="content">
		<div class="box">
		
		
			<h2>Fiche Medicaments</h2>
			<section>
				<form name="formMEDICAMENT" method="post" action="index.php?uc=Medicament&action=VerifForm">
		<?php
		// si la variable $_REQUEST['id'] est vide c'est qu'il s'agit d'un nouveau medicament à créer
		if(!empty($_REQUEST['id'])){ // si on demande une modification d'un medicament
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

		If(!empty($_REQUEST['id'])){ ?>
		  <label for "DepotLegal">DEPOT LEGAL :</label><input type="text" size="10" name="MED_DEPOTLEGAL" class="zone" value="<?php if(!empty($_REQUEST['id'])){echo $id; } ?>"/> </br> <?php } ?>
		
		<label for "NomCommercial">NOM COMMERCIAL :</label><input type="text" size="25" name="MED_NOMCOMMERCIAL" class="zone" value="<?php if(!empty($_REQUEST['id'])){echo $NomCommercial;} ?>"/></br>
		<label for "Famille">FAMILLE :</label><input type="text" size="3" name="FAM_CODE" class="zone" value="<?php if(!empty($_REQUEST['id'])){echo $code;} ?>" /></br>
		<label for "Composition">COMPOSITION :</label><textarea rows="5" cols="50" name="MED_COMPOSITION" class="zone"><?php if(!empty($_REQUEST['id'])){echo $Composition;} ?></textarea></br>
		<label for "Effet">EFFETS :</label><textarea rows="5" cols="50" name="MED_EFFETS" class="zone"><?php if(!empty($_REQUEST['id'])){echo $Effet;} ?></textarea></br>
		<label for "ContreIndic">CONTRE INDIC. :</label><textarea rows="5" cols="50" name="MED_CONTREINDIC" class="zone"> <?php if(!empty($_REQUEST['id'])){echo $ContreIndic;} ?></textarea></br>
		<label for "PrixEchant">PRIX ECHANTILLON :</label><input type="text" size="7" name="MED_PRIXECHANTILLON" class="zone" value="<?php if(!empty($_REQUEST['id'])){echo $PrixEchantillon;} ?>" /></br>
		<?php var_dump($id) ?>
		<input type="submit" name="valider">
	</form>
			</section>
		</div>
	</div>
	<br class="clearfix" />
</div>
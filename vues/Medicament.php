<div id="page">
	<div id="content">
		<div class="box">
			<h2>Fiche Medicaments</h2>
			<section>
				<form name="formMEDICAMENT" method="post" action="recupMEDICAMENT.php">
		<label for "DepotLegal">DEPOT LEGAL :</label><input type="text" size="10" name="MED_DEPOTLEGAL" class="zone" />
		<label for "NomCommercial">NOM COMMERCIAL :</label><input type="text" size="25" name="MED_NOMCOMMERCIAL" class="zone" />
		<label for "Famille">FAMILLE :</label><input type="text" size="3" name="FAM_CODE" class="zone" />
		<label for "Composition">COMPOSITION :</label><textarea rows="5" cols="50" name="MED_COMPOSITION" class="zone" ></textarea>
		<label for "Effet">EFFETS :</label><textarea rows="5" cols="50" name="MED_EFFETS" class="zone" ></textarea>
		<label for "ContreIndic">CONTRE INDIC. :</label><textarea rows="5" cols="50" name="MED_CONTREINDIC" class="zone"></textarea>
		<label for "PrixEchant">PRIX ECHANTILLON :</label><input type="text" size="7" name="MED_PRIXECHANTILLON" class="zone" />
		<input type="button" name="valider">
	</form>
			</section>
		</div>
	</div>
	<br class="clearfix" />
</div>
<section>
	<form action="index.php?uc=authentification&action=verifConnexion" method='post'>
		<select name="type">
<?php
	$lesTypes=Connexion::Type();
	foreach ($lesTypes as $type) {
		echo '<option value='.$type["TYP_Code"].'>'.$type["TYP_Libelle"].'</option><br/>';
	}
?>
</select> 
		<label for='login'>Login</label>	<input type='text' size='20px' name='login' id='login' placeholder="saisir votre login"/>
		<label for='mdp'>Mot de passe</label>	<input type='password' name='mdp' id='mdp' />
		<input type='submit' value='se connecter'/>
	</form>
</section>
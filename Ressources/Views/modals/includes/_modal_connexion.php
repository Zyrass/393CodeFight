<!-- MODAL_CONNEXION -->
<div class="modal" id="modal_connexion">
	<form action="" method="post">
		<div class="container">
	    	<div class="modal_body">
		    	<fieldset>
		    		<legend>Remplissez le formulaire si vous avez déjà un compte !</legend>
					<h1>Connectez-vous !</h1>
					<hr>
					<table>
						<tr>
							<th><label class="form_label" for="pseudo_connexion">Pseudo :</label></th>
							<td><input class="form_input_text" type="text" id="pseudo_connexion" name="post_pseudo"  placeholder="Minuscule / Majuscule / 0 à 9 / tiret du 6 et 20 caractères autorisé" required="required" pattern="$[a-zA-Z0-9\-]+{20}" /></td>		
						</tr>
						<tr>
							<th><label class="form_label" for="mdp_connexion">Mot de Passe :</label></th>
							<td><input class="form_input_text" type="text" id="mdp_connexion" name="post_mdp"  placeholder="Minuscule / Majuscule / 0 à 9 / tiret du 6 et 40 caractères autorisé" required="required" pattern="$[a-zA-Z0-9\-]+{40}" /></td>
						</tr>
						<tr>
							<td colspan="2">alerte visible que si erreur il y a</td>
						</tr>
					</table>
		    	</fieldset>
    		</div> <!-- Fin .modal_body -->
    		<input class="form_submit" type="submit" name="post_submit" value="Go casser du mob">
			<button class="btn_close_modal">Fermer cette fenêtre</button>
		</div> <!-- Fin .container-->
	</form>
</div><!-- /MODAL_CONNEXION -->
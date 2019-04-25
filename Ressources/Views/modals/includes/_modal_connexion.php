<!-- MODAL_CONNEXION -->
<div class="modal" id="modal_connexion">

	<form action="./?page=dashboard">	
		<fieldset>
			<legend>Remplissez le formulaire si vous avez déjà un compte !</legend>
	
			<h1>Connectez-vous !</h1>

			<div class="container">
				<label class="form_label" for="pseudo_connexion"><b>Pseudo</b></label>
				<input type="text" id="pseudo_connexion" name="post_pseudo"  placeholder="Minuscule / Majuscule / 0 à 9 / tiret du 6 et 20 caractères autorisé" required="required" pattern="$[a-zA-Z0-9\-]+{20}" />

				<label class="form_label" for="mdp_connexion"><b>Mot de Passe</b></label>
				<input type="password" id="mdp_connexion" name="post_mdp"  placeholder="Minuscule / Majuscule / 0 à 9 / tiret du 6 et 40 caractères autorisé" required="required" pattern="$[a-zA-Z0-9\-]+{40}" />

			</div> <!-- Fin .container -->
	  
	  		<div class="container">
	    		<button type="reset" class="btn_cancel">Réinitialisation du formulaire</button>
				<button type="submit" class="btn_submit">Se connecter</button>
	  		</div> <!-- Fin .container -->
		</fieldset>
	</form>
	<button type="button" class="btn_close_modal">Fermer cette fenêtre</button>
</div><!-- /MODAL_CONNEXION -->
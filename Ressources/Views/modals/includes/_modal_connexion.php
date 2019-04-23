<!-- MODAL_CONNEXION -->            
<div class="modal" id="modal_connexion">

	<div class="container">

    	<div class="modal_body">
	    	<fieldset>
	    		<legend>Remplissez le formulaire si vous avez déjà un compte !</legend>
				<h1>Connectez-vous !</h1>
				<hr>

				<form action="" method="post">
					
					<table>
					
						<tr>
							<th><label class="form_label" for="pseudo">Pseudo :</label></th>
							<td>
								<input 
									class="form_input_text" 
									type="text" 
									id="pseudo" 
									name="post_pseudo" 
									required="required"
									placeholder="Minuscule / Majuscule / 0 à 9 / tiret du 6 et 20 caractères autorisé" 
									pattern="$[a-zA-Z0-9\-]+{20}"
								>
							</td>								
						</tr>

						<tr>
							<th><label class="form_label" for="mdp">Mot de Passe :</label></th>
							<td>
								<input 
									class="form_input_text" 
									type="text" 
									id="mdp" 
									name="post_mdp"
									required="required"
									placeholder="Minuscule / Majuscule / 0 à 9 / tiret du 6 et 40 caractères autorisé" 
									pattern="$[a-zA-Z0-9\-]+{40}"
								>
							</td>
						</tr>

						<tr>
							<td colspan="2">alerte visible que si erreur il y a</td>
						</tr>
						
						<tr>
							<td colspan="2"><input class="form_submit" type="submit" name="post_submit" value="Go casser du mob"></td>
						</tr>

					</table>
				</form>

	    	</fieldset>    		
    	</div>

		<button class="btn_close_modal">Fermer cette fenêtre</button>		
	</div>

</div><!-- /MODAL_CONNEXION -->
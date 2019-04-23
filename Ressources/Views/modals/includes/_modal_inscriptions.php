<!-- MODAL_INSCRIPTION --> 
<div class="modal" id="modal_inscription">
    
	<div class="container">

		<form action="" method="post">

	    	<div class="modal_body">
		    	<fieldset>
		    		<legend>Toujours pas de compte ? Inscrivez-vous vite !</legend>
					<h1>Inscription</h1>
					<hr>
					<table>
						<tr>
							<th><label class="form_label" for="mail">Email :</label></th>
							<td>
								<input 
									class="form_input_text" 
									type="text" 
									id="mail" 
									name="post_mail" 
									required="required"
									placeholder="Adresse mail .com .fr et .net autorisé" 
									pattern="[a-zA-Z0-9\-]+@[a-zA-Z]+.(com|fr|net)"
								>
							</td>								
						</tr>					
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
									pattern="[a-zA-Z0-9\-]+{20}"
								>
							</td>								
						</tr>

						<tr>
							<th><label class="form_label" for="mdp">Password :</label></th>
							<td>
								<input 
									class="form_input_text" 
									type="password" 
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
					</table>
		    	</fieldset>
	    	</div>

			<input class="form_submit" type="submit" name="post_submit" value="Envoyer votre inscription">

		</form>
		<button class="btn_close_modal">Fermer cette fenêtre</button>	
	</div>

</div><!-- /MODAL_INSCRIPTION --> 
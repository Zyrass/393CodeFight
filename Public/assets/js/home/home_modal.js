'use strict';

document.addEventListener('DOMContentLoaded', function() {
	
	/*
	 * -------------------------------------------------------------------
	 * SCRIPT DE LA PAGE HOME
	 * -------------------------------------------------------------------
	 * 1 - LES CONSTANTES
	 * -------------------------------------------------------------------
	 */
	const BTN_CONNEXION 			= document.getElementById('btn_connexion');
	const MODAL_CONNEXION			= document.getElementById('modal_connexion');
	
	const BTN_INSCRIPTION 			= document.getElementById('btn_inscription');
	const MODAL_INSCRIPTION			= document.getElementById('modal_inscription');
	
	const BTN_MENTIONS_LEGALES 		= document.getElementById('btn_mentions_legales');
	const MODAL_MENTIONS_LEGALES	= document.getElementById('modal_mentions_legales');

	const BTN_CLOSE_MODAL			= document.querySelectorAll('.btn_close_modal');

	/*
	 * -------------------------------------------------------------------
	 * SCRIPT DE LA PAGE HOME
	 * -------------------------------------------------------------------
	 * 2 - LES METHODES
	 * -------------------------------------------------------------------
	 */
	 
	// Méthode pour cacher toutes les modales
	function hideAllModals() {
		hideModalConnexion();
		hideModalInscription();
		hideModalMentionsLegales();
	}

	// Méthodes pour CACHER les modals
	function hideModalConnexion() {
		MODAL_CONNEXION.style.display = 'none';

	}
	function hideModalInscription() {
		MODAL_INSCRIPTION.style.display = 'none';
	}
	function hideModalMentionsLegales() {
		MODAL_MENTIONS_LEGALES.style.display = 'none';
	}

	// Méthodes pour AFFICHER les modals
	function showModalConnexion() {
		MODAL_CONNEXION.classList.add('zoom');
		MODAL_CONNEXION.style.position 			= 'absolute';
		MODAL_CONNEXION.style.width 			= '60vw';
		MODAL_CONNEXION.style.height 			= '80vh';
		MODAL_CONNEXION.style.top 				= '10vh';
		MODAL_CONNEXION.style.display 			= 'flex';
		MODAL_CONNEXION.style.alignItems 		= 'center';
		MODAL_CONNEXION.style.justifyContent 	= 'center';
		MODAL_CONNEXION.style.animation 		= 'zoom_animation .6s';
		hideModalInscription();
		hideModalMentionsLegales();
	}
	function showModalInscription() {
		MODAL_INSCRIPTION.classList.add('zoom');
		MODAL_INSCRIPTION.style.position 		= 'absolute';
		MODAL_INSCRIPTION.style.width 			= '80vw';
		MODAL_INSCRIPTION.style.height 			= '80vh';
		MODAL_INSCRIPTION.style.top 			= '10vh';
		MODAL_INSCRIPTION.style.display 		= 'flex';
		MODAL_INSCRIPTION.style.alignItems 		= 'center';
		MODAL_INSCRIPTION.style.justifyContent 	= 'center';
		MODAL_INSCRIPTION.style.animation 		= 'zoom_animation .6s';
		hideModalConnexion();
		hideModalMentionsLegales();
	};
	function showModalMentionsLegales() {

		MODAL_MENTIONS_LEGALES.classList.add('zoom');			
		MODAL_MENTIONS_LEGALES.style.position 		= 'absolute';
		MODAL_MENTIONS_LEGALES.style.width 			= '60vw';
		MODAL_MENTIONS_LEGALES.style.height 		= '80vh';
		MODAL_MENTIONS_LEGALES.style.top 			= '10vh';
		MODAL_MENTIONS_LEGALES.style.display 		= 'flex';
		MODAL_MENTIONS_LEGALES.style.alignItems 	= 'center';
		MODAL_MENTIONS_LEGALES.style.position 		= 'absolute';
		MODAL_MENTIONS_LEGALES.style.justifyContent = 'center';				
		MODAL_MENTIONS_LEGALES.style.animation 		= 'zoom_animation .6s';		
		hideModalConnexion();
		hideModalInscription();
	};

	// Méthode pour initiliser le programme.
	function program_init() {

		// Méthode pour cacher les modals au démarrage de l'application.
		hideModalConnexion();
		hideModalInscription();
		hideModalMentionsLegales();

		// Ajout d'un écouteur sur le clic d'un bouton et AFFICHE la modal correspondante.
		BTN_CONNEXION.addEventListener("click", showModalConnexion);
		BTN_INSCRIPTION.addEventListener("click", showModalInscription);
		BTN_MENTIONS_LEGALES.addEventListener("click", showModalMentionsLegales);

		// Ajout d'un écouteur sur le clic d'un bouton et CACHE la modal correspondante.
		BTN_CLOSE_MODAL[0].addEventListener("click", hideAllModals);
		BTN_CLOSE_MODAL[1].addEventListener("click", hideAllModals);
		BTN_CLOSE_MODAL[2].addEventListener("click", hideAllModals);
	}

	/*
	 * -------------------------------------------------------------------
	 * SCRIPT DE LA PAGE HOME
	 * -------------------------------------------------------------------
	 * 3 - INITIALISATION DU PROGRAMME
	 * -------------------------------------------------------------------
	 */
	program_init();


}); // END EVENT "DOMContentLoaded"
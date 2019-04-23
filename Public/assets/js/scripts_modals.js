'use strict';

document.addEventListener('DOMContentLoaded', function() {
	
	/*
	 * -------------------------------------------------------------------
	 * SCRIPT DE LA PAGE HOME
	 * -------------------------------------------------------------------
	 * 1 - CONSTANTES
	 * 2 - METHODES
	 * 3 - INITIALISATION DU PROGRAMME
	 * -------------------------------------------------------------------
	 */

	 /* 
	  * ------------------------------------------------------------------
	  * 1 - LES CONSTANTES
	  * ------------------------------------------------------------------
	  */
	const BTN_CONNEXION 			= document.getElementById('btn_connexion');
	const MODAL_CONNEXION			= document.getElementById('modal_connexion');
	
	const BTN_INSCRIPTION 			= document.getElementById('btn_inscription');
	const MODAL_INSCRIPTION			= document.getElementById('modal_inscription');
	
	const BTN_MENTIONS_LEGALES 		= document.getElementById('btn_mentions_legales');
	const MODAL_MENTIONS_LEGALES	= document.getElementById('modal_mentions_legales');

	const BTN_CLOSE_MODAL			= document.querySelectorAll('.btn_close_modal');

	 /* 
	  * ------------------------------------------------------------------
	  * 2 - LES METHODES
	  * ------------------------------------------------------------------
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
		MODAL_CONNEXION.style.display 			= 'block';
		MODAL_CONNEXION.style.position 			= 'absolute';
		MODAL_CONNEXION.style.zIndex 			= '99999';
		MODAL_CONNEXION.style.width 			= '80vw';
		MODAL_CONNEXION.style.height 			= '70vh';
		hideModalInscription();
		hideModalMentionsLegales();
	};
	function showModalInscription() {
		MODAL_INSCRIPTION.style.display 		= 'block';
		MODAL_INSCRIPTION.style.position 		= 'absolute';
		MODAL_INSCRIPTION.style.zIndex 			= '99999';
		MODAL_INSCRIPTION.style.width 			= '80vw';
		MODAL_INSCRIPTION.style.height 			= '70vh';
		hideModalConnexion();
		hideModalMentionsLegales();
	};
	function showModalMentionsLegales() {
		MODAL_MENTIONS_LEGALES.style.display 	= 'block';
		MODAL_MENTIONS_LEGALES.style.position 	= 'absolute';
		MODAL_MENTIONS_LEGALES.style.zIndex 	= '99999';
		MODAL_MENTIONS_LEGALES.style.width 		= '80vw';
		MODAL_MENTIONS_LEGALES.style.height 	= '70vh';
		hideModalConnexion();
		hideModalInscription();
	};

	// Méthode pour initiliser le programme
	function program_init() {

		// Modal caché au démarrage
		hideModalConnexion();
		hideModalInscription();
		hideModalMentionsLegales();

		// EVENT CLICK + AFFICHAGE de la modale.
		BTN_CONNEXION.addEventListener("click", showModalConnexion);
		BTN_INSCRIPTION.addEventListener("click", showModalInscription);
		BTN_MENTIONS_LEGALES.addEventListener("click", showModalMentionsLegales);

		// EVENT CLICK + MASQUAGE de la modale
		BTN_CLOSE_MODAL[0].addEventListener("click", hideAllModals);
		BTN_CLOSE_MODAL[1].addEventListener("click", hideAllModals);
		BTN_CLOSE_MODAL[2].addEventListener("click", hideAllModals);
	}

	 /* 
	  * ------------------------------------------------------------------
	  * 3 - INITIALISATION DU PROGRAMME
	  * ------------------------------------------------------------------
	  */
	  program_init();


}); // END EVENT "DOMContentLoaded"
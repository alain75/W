<?php
	
	$w_routes = array(
		// page d'accueil de l'admini (afficher tous les termes)
		['GET', '/admin/termes/', 'Term#showAll', 'show_all_terms'],

		// page de Effacer le terme
		['GET', '/admin/termes/suppression/[i:id]/', 'Term#delete', 'delete_terms'],

		// Page modifie le terme
		['GET|POST', '/admin/termes/modification/[i:id]/', 'Term#edit', 'edit_terms'], 

		// page le mot du jour
		['GET', '/admin/termes/nouveau-mdj/[i:id]/', 'Term#change_Wotd', 'change_wotd'], 

		// Crée un nouvel administrateur
		['GET|POST', '/admin/administrateurs/inscription/', 'user#register', 'register_administrator'], 
	
		// Connexion
		['GET|POST', '/admin/connexion/', 'user#login', 'login'], 

		// Deconnexion
		['GET|POST', '/admin/deconnexion/', 'user#logout', 'logout'], 
	);
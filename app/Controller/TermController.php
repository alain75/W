<?php

namespace Controller;

use \W\Controller\Controller;

class TermController extends Controller
{
	

	/**
	 * Page d'accueil par défaut
	 */
	public function showAll()
	{
		$TermManager = new \Manager\TermManager();
		$terms = $TermManager->findAll("modifiedDate","DESC");

		$wotd = $TermManager->getCurrentWordOfTheDay(); //modif

		$this->show('term/show_all_terms',['terms' => $terms, 'wotd' => $wotd]); //modif
	}

	public function delete($id) //Efface
	{
		$termManager = new \Manager\TermManager();
		$termManager->delete($id);

		$this->redirectToRoute('show_all_terms');
	}

	public function edit($id) //Edit
	{
			$termManager = new \Manager\TermManager();
			
			// si le formulaire est soumis ... ($_POST n'est pas vide)
			 if(!empty($_POST))
			 {
			    // valider... au moins un minimum...

			    // -----------------------------------------------//
				// $name = trim($_POST['name']);
				// if(strlen($nome) > 1)
			 	// -----------------------------------------------//

				if(strlen($_POST['name']) > 1)
			 	{	

			 	    //--------------------------------------------//
			 		// $date = [
			 		// "name" => $name,
			 		// "modifiedDate" => date("Y-m-d H:i:s");
			 		// ];
			 		//--------------------------------------------//

					//souvegarde les modification avec la methode update() du TermManager
					// $termManager->update($date, $id); //----------------------//

					$termManager->update($_POST, $id);
					$this->redirectToRoute('show_all_terms');
				}
			}
			$terms = $termManager->find($id);
		$this->show('term/edit_terms',["terms" => $terms]);
	}

	public function change_Wotd($id)
	{
		$termManager = new \Manager\TermManager();
		$wotd = $termManager-> getCurrentWordOfTheDay();

		// $Wotd = termManager->getRandomWord();

		$termManager->update(["is_wotd" => 0], $wotd['id']);
	
		$termManager->update(["is_wotd" => 1], $id);

		$this->redirectToRoute('show_all_terms');
	
	}
}
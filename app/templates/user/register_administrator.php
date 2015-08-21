<?php $this->layout('layout', ['title' => 'ajouter d\'un administrator']) ?>
	
	<?php $this->start('main_content') ?>
	<!--link rel="stylesheet" type="text/css" href="<= $this->assetUrl('css/style.css')"-->
		<h2>ajouter un administrateur.</h2>

		<p> Veuillez rensigner les champs suivent </p>
		<div class="forme">	
			<form method="POST" action="">
				<label>Pseudo</label>
				<input type="text" id='nam' name='username' value><br />

				<label>Email</label>
				<input type="email" id='nam' name='email' value><br />

				<label>Mot de passe </label>
				<input type="password" id='password' name='password' value><br />

				<label>Confirm mot de passe </label>
				<input type="password" id='password' name='password_confirm' value><br /><br />

				<input type="submit" name="Valider">
				<input type="reset" name="reset">
			</form>
		</div>

	<?php $this->stop('main_content') ?>


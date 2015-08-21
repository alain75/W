<?php $this->layout('layout', ['title' => 'ajouter d\'un administrator']) ?>
	
	<?php $this->start('main_content') ?>
	<!--link rel="stylesheet" type="text/css" href="<= $this->assetUrl('css/style.css')"-->
		<h2>Connexion.</h2>

		<p> Veuillez rensigner les champs suivent </p>
		<div class="forme">	
			<form method="POST" novalide>

				<label for="username">Pseudo ou email</label>
				<input type="text" id='username' name='username' value="<?= $username?>"><br />

				<label for="password">Mot de passe </label>
				<input type="password" id='password' name='password' value><br />

				<input type="submit" name="connexion" />
				<div><?=$error ?></div>

			</form>
		</div>

	<?php $this->stop('main_content') ?>
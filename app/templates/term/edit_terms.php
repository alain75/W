<?php $this->layout('layout', ['title' => 'Modification']) ?>

<?php $this->start('main_content') ?>
	<h2></h2>

	<form method="POST">
		<label for="name">Modifier</label>
		<input type="text" id="name" name="name" value="<?= $this->e($terms['name']) ?>" />

		<input type="submit" value="Enregistrer" />
		<!-- <input type="submit" onclick="return confirm('sur ?')"value="Enregistrer" /> -->
	</form>

<?php $this->stop('main_content') ?>



<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/reset.css') ?>">
</head>
<body>
	<div class="container">
		<header>
			<h1>W Admin :: <?= $this->e($title) ?></h1>

			<?php if ($w_user): ?>
				<p>Bonjour <?= $w_user['username']; ?></p>
				<a href="<?= $this->url('logout'); ?>" title="Déconnexion">Déconnexion</a>
			<?php endif; ?>
		</header>

		<section>
			<?= $this->section('main_content') ?>
		</section>

		<footer>
		</footer>
	</div>
</body>
</html>
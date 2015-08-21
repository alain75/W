<?php $this->layout('layout', ['title' => 'About !']) ?>

<?php $this->start('main_content') ?>
	<h2>Qui sommes-nous...</h2>
	<img src="<?php echo $this->assetUrl('image/chat.png'); ?>"alt="chat" />
	
<?php $this->stop('main_content') ?>
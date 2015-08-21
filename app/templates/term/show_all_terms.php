<?php $this->layout('layout', ['title' => 'Accueil !']) ?>

<?php $this->start('main_content') ?>
	<h2>Tous les termes.</h2>
	<table>	
		<tr>
			<th>Id</th>
			<th>Terme</th>
			<th>Modification</th>
			<th>Action</th>

		</tr>
	<?php foreach ($terms as $term): ?> 
		<tr <?php if ($term['is_wotd']) echo 'class="wotd"'; ?>>	
			<td><?= $this->e($term['id']); ?></td> 
			<td><?= $this->e($term['name']); ?></td> 
			<td><?= $this->e($term['modifiedDate']); ?></td> 
			<td><a href="<?php echo $this->url('delete_terms',["id" => $term['id']]); ?>" title="effacer ce terme"><i class="fa fa-trash">&nbsp effacer &nbsp &nbsp </a></td>
			<td><a href="<?php echo $this->url('edit_terms',["id" => $term['id']]); ?>" title=" modifier ce terme"><i class="modif"> &nbsp modifier&nbsp</a></td>
			<td><a href="<?php echo $this->url('change_wotd',["id" => $term['id']]); ?>" title=" choisir ce terme comme MDJ"><i class="fa fa-trash"> &nbsp &nbspTerme du MDJ</a></td>
		</tr>
	<?php endforeach ; ?> 
	</table>
	
<?php $this->stop('main_content') ?>

<?php  $this->load->view('header');  ?>

<table border="0" cellpadding="0" cellspacing="1" style="width:100%">
 <tr>
	<th>Editar</th>
	<th>Borrar</th>
	<?php foreach($fields as $field): ?>
	<th><?php echo $field; ?></th>
	<?php endforeach; ?>
</tr>

<?php foreach($query->result() as $row): ?>
 <tr>
	<td>&nbsp;<?php echo anchor(array($base_uri, 'edit', $row->$primary), 'Editar'); ?>&nbsp;</td>
 	<td><?php echo anchor(array($base_uri, 'delete', $row->$primary), 'Borrar'); ?></td>
 	<?php foreach($fields as $field): ?>	
	<td><?php echo form_prep($row->$field);?></td>
	<?php endforeach; ?>
 </tr>
<?php endforeach; ?>
</table>

<?php echo $paginate; ?>

<?php $this->load->view('footer'); ?>
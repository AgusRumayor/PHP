<?php  $this->load->view('header');  ?>

<p><?php echo 'No hay registros'; ?></p>
<p><?php echo anchor(array($base_uri, 'add'), 'Crear Nuevo'); ?></p>

<?php $this->load->view('footer'); ?>
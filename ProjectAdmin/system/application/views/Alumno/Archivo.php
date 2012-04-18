<?php
$this->load->view('header');
?>
<link href="http://localhost/ProyectoFinal/system/application/views/default.css" rel="stylesheet" type="text/css" />
<body>
<h2 align="center">Subir Archivo</h2>
<div class="box">
  <h3>&nbsp;</h3>
  <div class="boxContent">
<?=form_open_multipart('Alumno/Archivo/do_upload'); ?>
<span>*Nombre del archivo:</span><br>
                    <input type="text" name="nombre" value="1" size="50" /><br>
                    <span>*Descripción:</span><br>
                    <input type="text" name="desc" value="1" size="50" /><br>
		    <span> Actividad:</span><br>
                    <input type="text" name="act" value="1" size="50" /><br>

			<span> Archivo:</span><br>
                    <input type="file" name="userfile" value="" size="50" /><br>
                    <input type="submit" class="button" value="Enviar" /><br>
<br /><br />

</form>

  </div>
* Campos requeridos
<?=$error;?>
</div>
</body>


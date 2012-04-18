<html>
<head>
<title>Elegir RDF</title>
</head>
<?//=$Style;?>
<?php
	$_SESSION['sty']=$Style;
	echo '<link rel="stylesheet" href="http://localhost/CodeIgniter/system/application/views/stylesheets/'.$Style.'.css">';
	echo '<HTML><BODY>';
  	echo '<FORM METHOD="post" ACTION="http://localhost/CodeIgniter/system/application/views/VisualizadorRDF.php">';
	echo '<h1>Bienvenido '.$Nombre.'</h1><br>';
	echo 'RDF que quiere visualizar:<INPUT NAME="archivo" TYPE="Text"/><br><br>';
	echo '<INPUT TYPE="submit" VALUE="Aceptar"><input type="hidden" name="Style" value='.$Style.'></FORM></BODY></HTML>';


?>
</html>
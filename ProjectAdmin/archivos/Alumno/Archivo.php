<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Project Coord</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://localhost/ProyectoFinal/system/application/views/default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="outer">
	<div id="header">
		<h1><a href="#">Project Coord</a></h1>
		<h2>by Agus, Victor, Fernando</h2>
	</div>
	<div id="menu">
		<ul>
			<li class="first"><a href="form" accesskey="1" title="">Inicio</a></li>
			<li><a href="#" accesskey="2" title="">About Us</a></li>
			<li><a href="#" accesskey="3" title="">Proyectos</a></li>
			<li><a href="#" accesskey="5" title=""> Salir</a></li>
		</ul>
  </div><?php

?>
<h2 align="center">Enviar Archivo</h2>
<div class="box">
  <h3>&nbsp;</h3>
<form enctype="multipart/form-data" action="Upload.php" method="POST">
 <span>*Nombre del archivo:</span><br>
                    <input type="text" name="nombre" value="1" size="50" /><br>
                    <span>*Descripción:</span><br>
                    <input type="text" name="desc" value="1" size="50" /><br>
		    <span> Actividad:</span><br>
                    <input type="text" name="act" value="1" size="50" /><br>
		<span> Archivo:</span><br>
                    <input type="file" name="uploaded" value="1" size="50" /><br>
                    <input type="submit" class="button" value="Enviar" /><br>
                  </div>
              </form>

  </div>
* Campos requeridos
<?=$error;?>
</div>
</body>
</body>
</html>
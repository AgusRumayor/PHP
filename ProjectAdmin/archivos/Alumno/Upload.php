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
			<li class="first"><a href="http://localhost/ProyectoFinal/index.php/form" accesskey="1" title="">Inicio</a></li>
			<li><a href="#" accesskey="2" title="">About Us</a></li>
			<li><a href="#" accesskey="3" title="">Proyectos</a></li>
			<li><a href="#" accesskey="5" title=""> Salir</a></li>
		</ul>
  </div>
<?php
$target = "arch/";
$target = $target . basename( $_FILES['uploaded']['name']) ;
$ok=1;
if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target))
{
echo "El archivo ". basename( $_FILES['uploadedfile']['name']). " ha sido enviado\n";
}
else {
echo "Lo sentimos, no se pudo enviar el archivo.";
}
require("conect.php");
$Nombre= $_POST['nombre'];
$Desc= $_POST['desc'];
$Act= $_POST['act'];
$consulta = mysql_query("INSERT INTO Documento (`Nombre`, `Descripcion`, `Actividad`) 
						VALUES ('$Nombre', '$Desc', '$Act');");
if($guardar == mysql_query("$consulta"))
{
	echo "Se ha dado de alta en el sistema";
}
else
{
	echo "Error";
}
?>
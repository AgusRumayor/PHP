<?
	$Servidor = localhost;
	$Usuario = "root";
	$Password = "";
	$BaseDeDatos = "PF_aplicaciones";
	$conexion=mysql_connect($Servidor,$Usuario,$Password) or die ("Nel no pude");
	$descriptor=mysql_select_db($BaseDeDatos,$conexion);
?>

<?php

class Upload extends Controller {
	
	function Upload()
	{
		parent::Controller();
		$this->load->helper(array('form', 'url'));
	}
	
	function index()
	{	
		$this->load->view('Alumno/upload_form', array('error' => ' ' ));
		if(isset($_POST['Enviar']))
{
		//tomo el valor de un elemento de tipo texto del formulario
  $cadenatexto = $_POST["cadenatexto"];
  echo "Escribió en el campo de texto: " . $cadenatexto . "<br><br>";
  
  //datos del arhivo
  $nombre_archivo = $HTTP_POST_FILES['userfile']['name'];
  $tipo_archivo = $HTTP_POST_FILES['userfile']['type'];
  $tamano_archivo = $HTTP_POST_FILES['userfile']['size'];

  //compruebo si las características del archivo son las que deseo
  if (!((strpos($tipo_archivo, "gif") || strpos($tipo_archivo, "jpeg")) && ($tamano_archivo < 100000))) 
  {
    $error = "La extensión o el tamaño de los archivos no es correcta. <br><br><table><tr><td><li>Se permiten
    archivos .gif o .jpg<br><li>se permiten archivos de 100 Kb máximo.</td></tr></table>";
	$this->load->view('Alumno/upload_form', array('error' => ' ' ));
  }
  else  
  {
    if (move_uploaded_file($HTTP_POST_FILES['userfile']['tmp_name'], $nombre_archivo))
    {
      $error = "El archivo ha sido cargado correctamente.";
$this->load->view('Alumno/upload_form', array('error' => ' ' ));
    }
    else
    {
      $error = "Ocurrió algún error al subir el fichero. No pudo guardarse.";
$this->load->view('Alumno/upload_form', array('error' => ' ' ));
    }
  }
	}
		}	
	}
?>
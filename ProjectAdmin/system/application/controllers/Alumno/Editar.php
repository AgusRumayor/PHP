<?php
session_start();
class Editar extends Controller {
	
	function Editar() {
	      parent::Controller();
	}

	function index()
	{
		$this->load->helper(array('form', 'url'));
		
		$this->load->library('validation');
		//$par=1;
		//Utilizacion de librerias
		//$this->load->library('prueba1');
		
		//$tmp1= $this->prueba1->r($par);
		//echo $tmp1;
		$rules['password']	= "required";
		$rules['passconf']	= "matches[password]";
		$rules['email']		= "";
		$Datos['Nombre']="A";

		$this->validation->set_rules($rules);
			
		if ($this->validation->run() == FALSE)
		{
			//$this->load->view('forma_view_validate_master', $Datos);
			$this->load->view('Alumno/Editar_perfil', $Datos);
		}
		else
		{
			$Datos= array (
			'Nombre'=> $_POST['nombre'],
			'Foto'=>$_POST['foto'],
			'Contrasena'=>$_POST['password'],
			'Carrera'=>$_POST['carr'],
			'Semestre'=>$_POST['sem'],);
			$tabla='Alumno';
			$this->load->library('session');
			$tmp= $this->session->userdata('Mat');
			$this->load->library('basededatos');
			$query = $this->basededatos->update_field($tabla, $Datos, 'Matricula', $tmp);
			$this->load->view('Index1', $Datos);
			
		}
	}
	
}
?>
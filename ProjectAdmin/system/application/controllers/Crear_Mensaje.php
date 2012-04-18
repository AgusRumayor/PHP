<?php
session_start();
class Crear_Mensaje extends Controller{
	
	function Crear_Mensaje() {
	      parent::Controller();
	}

	function index()
	{
		$this->load->helper(array('form', 'url'));
		
		$this->load->library('validation');

		$rules['msj']	= "required";
		$rules['to']	= "";
		$rules['email'] = "";
		$Datos= array (
			'Mensaje'=> 'Prueba',
			'A'=>'Todos',
			'Asunto'=> 'Mensaje 1');
		if(isset($_POST['Enviar']))
		{
		$Datos= array (
			'Mensaje'=> $_POST['msj'],
			'A'=>$_POST['to'],
			'Asunto'=>$_POST['Asunto']);

		}
		$this->validation->set_rules($rules);
			
		if ($this->validation->run() == FALSE)
		{
			$this->load->view('Inicio', $Datos);
		}
		else
		{
			$this->load->library('session');
			$tabla= 'Mensaje';
			$valor= array(
				'Texto'=>$_POST['msj'],
				'Fecha'=> date('Y/m/d'),
				'Asunto'=>$_POST['Asunto'],
				'Para'=>$_POST['email'].$_POST['to'],
				'Matricula'=>$this->session->userdata('Mat'));
			
			//Modificar la tabla de mensajes el orden de campos
			$this->load->library('basededatos');
			$this->basededatos->set_field($tabla, $valor);
			$this->validation->set_message('mensaje_check', 'El mensaje ha sido enviado');
			$this->load->view('Mensaje_success', $Datos);
			
		}
	}
	
	
}
?>
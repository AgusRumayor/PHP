<?php
session_start();
class Actividad extends Controller{
	
	function Actividad() {
	      parent::Controller();
	}

	function index()
	{
		$this->load->helper(array('form', 'url'));
		
		$this->load->library('validation');
		$this->load->library('session');
		$rules['pro']	= "required";
		$rules['desc']	= "required";
		$Datos= array (
			'Proyecto'=> 'Prueba',
			'Descripcion'=>'Todos',
			'Matricula'=> 'Mensaje 1');
		if(isset($_POST['Enviar']))
		{
		$Datos= array (
			'Proyecto'=> $_POST['pro'],
			'Descripcion'=>$_POST['desc'],
			'Matricula'=>$this->session->userdata['Mat']);

		}
		$this->validation->set_rules($rules);
			
		if ($this->validation->run() == FALSE)
		{
			$this->load->view('Inicio', $Datos);
		}
		else
		{
			$this->load->library('session');
			$tabla= 'Actividad';
			$valor= array(
				'Descripcion'=>$_POST['desc'],
				'Fecha'=> date('Y/m/d'),
				'Fecha_entrega'=> $_POST['fec'],
				'Proyecto'=>$_POST['pro'],
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
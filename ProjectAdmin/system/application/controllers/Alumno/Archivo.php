<?php
session_start();
class Archivo extends Controller {
	
	function Archivo() {
	      parent::Controller();
		$this->load->helper(array('form', 'url'));
	}

		function index()
	{	
		$this->load->view('Alumno/Archivo', array('error' => ' ' ));
	}

	function do_upload()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'doc';
		$config['max_size']	= '1000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		
		$this->load->library('upload', $config);
	
		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
			
			$this->load->view('Alumno/Archivo', $error);
		}	
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$this->load->library('session');
			$tabla= 'Documento';
			$valor= array(
				'Nombre'=>$_POST['nombre'],
				'Descripcion'=>$_POST['desc'],
				'Alumno'=>$this->session->userdata('Mat'),
				'Actividad'=>$_POST['act']);
			
			//Modificar la tabla de mensajes el orden de campos
			$this->load->library('basededatos');
			$this->basededatos->set_field($tabla, $valor);
			$this->load->view('proyectos', $data);
		}
	}
	
}
?>
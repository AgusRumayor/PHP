<?php
session_start();
class Form_master extends Controller {
	
	function Form_master() {
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
		$rules['username']	= "callback_username_check";
		$rules['password']	= "callback_password_check";
		$rules['passconf']	= "";
		$rules['email']		= "required";
		$Datos['username']= "a";
		if(isset($_POST['Enviar']))
		{
		$Datos= array (
			'Nombre'=> $_POST['username'],
			'Tipo'=>$_POST['email'],
			'Password'=>$_POST['password'],
			'Passconf'=>$_POST['passconf']);
		}
		$this->validation->set_rules($rules);
			
		if ($this->validation->run() == FALSE)
		{
			$this->load->view('Index', $Datos);
		}
		else
		{
			$this->load->database();
			$tmp= $_POST['username'];
		 	$query = $this->db->query("SELECT Nombre FROM Master
						WHERE `Matricula` = '$tmp';");
			$row = $query->row();
			$Datos['Nombre']= $row->Nombre;
			$this->load->view('Inicio', $Datos);
		}
	}
	
	function username_check($str)
	{
		$this->load->database();

		 $query = $this->db->query("SELECT Matricula FROM Master
						WHERE `Matricula` = '$str';");
		$nrows = $query->num_rows();
		if ($nrows < 1)
		{
			$this->validation->set_message('username_check', 'La matricula de usuario no es correcto');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
	function password_check($str)
	{
		$this->load->database();
		$tmp= $_POST['username'];
		 $query = $this->db->query("SELECT Contrasena FROM Master
						WHERE `Matricula` = '$tmp';");
		$row = $query->row();
		if ($str != $row->Contrasena)
		{
			$this->validation->set_message('password_check', 'El password de usuario no es correcto');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
}
?>
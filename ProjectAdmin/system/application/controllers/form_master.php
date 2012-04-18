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
		$rules['email']		= "";
		$Datos['username']= "a";
		if(isset($_POST['Enviar']))
		{
		$_SESSION['Mat']=$_POST['username'];
		$Datos= array (
			'Nombre'=> $_POST['username'],
			'Style'=>$_POST['email'],
			'Password'=>$_POST['password'],
			'Passconf'=>$_POST['passconf']);
		}
		$this->validation->set_rules($rules);
			
		if ($this->validation->run() == FALSE)
		{
			//$this->load->view('forma_view_validate_master', $Datos);
			$this->load->view('Master/Index_master', $Datos);
		}
		else
		{
			$this->load->library('session');
			$this->load->database();
			$tmp= $_POST['username'];
		 	$query = $this->db->query("SELECT Nombre FROM Master
						WHERE `Matricula` = '$tmp';");
			$row = $query->row();
			$Datos['Nombre']= $row->Nombre;
			$tmp2='Master'.$tmp;
			$Datos['Vector']= $this->get_msj($tmp2);
			$Datos['Mat']= $_POST['username'];
			$Datos['Tipo']= 'Master';
			$this->session->set_userdata($Datos);
			$this->load->view('Master/Inicio', $Datos);
			
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
			$this->validation->set_message('username_check', 'La matricula de usuario no es correcta');
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
		$nrow= $query->num_rows();
		if($nrow>0){
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
		else{
			$this->validation->set_message('password_check', 'El password de usuario no es correcto');
			return FALSE;
		}
	}
	function get_msj($mat)
	{
		$this->load->database();
		$this->load->library('basededatos');
		$tabla= "Mensaje";
		$campo= "Para";
		$query = $this->basededatos->get_value($tabla, $campo, $mat);
		$query1 = $this->basededatos->get_value($tabla, $campo, 'MasterTodos');
		$query2 = $this->basededatos->get_value($tabla, $campo, 'Mastertodos');
		$query3 = $this->basededatos->get_value($tabla, $campo, 'Todos');
		$query4= array_merge($query,$query1,$query2,$query3);
		return $query4;
	}
}
?>
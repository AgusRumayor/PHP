<?php
session_start();
class Form extends Controller {
	
	function Form() {
	      parent::Controller();
	}

	function index()
	{
		$this->load->helper(array('form', 'url'));
		
		$this->load->library('validation');
			
		$rules['username']	= "callback_username_check";
		$rules['password']	= "callback_password_check";
		$rules['passconf']	= "";
		$rules['email']		= "";
		$Datos['username']= "a";
		if(isset($_POST['Enviar']))
		{
		$this->load->library('session');
			$this->load->database();
			$tmp= $_POST['username'];
			$tmp1=$_POST['email'];
		 	$query = $this->db->query("SELECT Nombre FROM $tmp1
						WHERE `Matricula` = '$tmp';");
			$row = $query->row();
			$Datos['Nombre']= $row->Nombre;
			$tmp2=$tmp1.$tmp;
			$Datos['Vector']= $this->get_msj($tmp2);
			$Datos['Proy']= $this->get_pro($tmp);
			$Datos['Equipo']= $this->get_equi($tmp);
			$Datos['Act']= $this->get_act($tmp);
			$Datos['Foto']= $this->get_foto($tmp);
			$Datos['Mat']= $_POST['username'];
			$Datos['Tipo']= $_POST['email'];
			$this->session->set_userdata($Datos);
		}
		$this->validation->set_rules($rules);
			
		if ($this->validation->run() == FALSE)
		{
			//$this->load->view('forma_view_validate_master', $Datos);
			$this->load->view('Index1', $Datos);
		}
		else
		{
			$this->load->library('session');
			$this->load->database();
			$tmp= $_POST['username'];
			$tmp1=$_POST['email'];
		 	$query = $this->db->query("SELECT Nombre FROM $tmp1
						WHERE `Matricula` = '$tmp';");
			$row = $query->row();
			$Datos['Nombre']= $row->Nombre;
			$tmp2=$tmp1.$tmp;
			$Datos['Vector']= $this->get_msj($tmp2);
			$Datos['Proy']= $this->get_pro($tmp);
			$Datos['Equipo']= $this->get_equi($tmp);
			$Datos['Act']= $this->get_act($tmp);
			$Datos['Foto']= $this->get_foto($tmp);
			$Datos['Mat']= $_POST['username'];
			$Datos['Tipo']= $_POST['email'];
			$this->session->set_userdata($Datos);
			$this->load->view($Datos['Tipo'].'/Inicio', $Datos);
			
		}
	}
	
	function username_check($str)
	{
		$this->load->database();
		$tmp=$_POST['email'];
		 $query = $this->db->query("SELECT Matricula FROM $tmp
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
		$tmp1=$_POST['email'];
		 $query = $this->db->query("SELECT Contrasena FROM $tmp1
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
		$tmp1=$_POST['email'];
		$query = $this->basededatos->get_value($tabla, $campo, $mat);
		$query1 = $this->basededatos->get_value($tabla, $campo, $tmp1.'Todos');
		$query2 = $this->basededatos->get_value($tabla, $campo, $tmp1.'todos');
		$query3 = $this->basededatos->get_value($tabla, $campo, 'Todos');
		$query4= array_merge($query,$query1,$query2,$query3);
		return $query4;
	}
	function get_pro($mat)
	{
		$this->load->database();
		$this->load->library('basededatos');
		if($_POST['email']=="Alumno")
		{
		$query = $this->db->query("SELECT * FROM `Proyecto` WHERE Clave IN (
					SELECT Clave_Proyecto FROM `Equipo_Proyecto` WHERE Clave_Equipo IN (
					SELECT Equipo FROM `Integrantes` WHERE Matricula='$mat'));");
		return $query->result_array();
		}
		if($_POST['email']=="Profesor")
		{
		$query = $this->db->query("SELECT * FROM `Proyecto` WHERE Materia IN(
					SELECT Clave FROM `Materia` WHERE Profesor ='$mat');");
		return $query->result_array();
		}
	}
	function get_equi($mat)
	{
		$this->load->database();
		$this->load->library('basededatos');
		if($_POST['email']=="Alumno")
		{
		$query = $this->db->query("SELECT * FROM `Integrantes` WHERE Equipo IN (
					SELECT Equipo FROM `Integrantes` WHERE Matricula='$mat');");
		return $query->result_array();
		}
		if($_POST['email']=="Profesor")
		{
		$query = $this->db->query("SELECT * FROM `Integrantes` WHERE Equipo IN (
					SELECT Clave FROM `Equipo` WHERE Profesor='$mat');");
		return $query->result_array();
		}
	}
	function get_foto($mat)
	{
		$this->load->database();
		$this->load->library('basededatos');
		$tmp1=$_POST['email'];
		$query = $this->db->query("SELECT foto FROM `$tmp1` WHERE Matricula='$mat';");
		return $query->result_array();
	}
	function get_act($mat)
	{
		$this->load->database();
		$this->load->library('basededatos');
		if($_POST['email']=="Alumno")
		{
		$query = $this->db->query("SELECT * FROM `Actividad` WHERE Proyecto IN (
					SELECT Clave_proyecto FROM `Equipo_Proyecto` WHERE Clave_Equipo IN (
					SELECT Equipo FROM `Integrantes` WHERE Matricula='$mat'))");
		return $query->result_array();
		}
		if($_POST['email']=="Profesor")
		{
		$query = $this->db->query("SELECT * FROM `Actividad` WHERE Matricula='$mat';");
		return $query->result_array();
		}
	}
}
?>
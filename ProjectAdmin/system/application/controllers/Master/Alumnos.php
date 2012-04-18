<?php
session_start();
class Alumnos extends Controller {
	
	function Alumnos() {
	      parent::Controller();
		$this->load->view('Master/header');
		$this->load->scaffolding('Alumno');
	}

}
?>
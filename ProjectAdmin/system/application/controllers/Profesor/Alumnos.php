<?php
session_start();
class Alumnos extends Controller {
	
	function Alumnos() {
	      parent::Controller();
		$this->load->view('header');
		$this->load->scaffolding('Alumno');
	}

}
?>
<?php
session_start();
class Profesores extends Controller {
	
	function Profesores() {
	      parent::Controller();
		$this->load->view('Master/header');
		$this->load->scaffolding('Profesor');
	}

}
?>
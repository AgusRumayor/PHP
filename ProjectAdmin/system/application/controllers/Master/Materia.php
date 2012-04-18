<?php
session_start();
class Materia extends Controller {
	
	function Materia() {
	      parent::Controller();
		$this->load->view('Master/header');
		$this->load->scaffolding('Materia');
	}

}
?>
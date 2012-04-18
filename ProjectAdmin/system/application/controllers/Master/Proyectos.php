<?php
session_start();
class Proyectos extends Controller {
	
	function Proyectos() {
	      parent::Controller();
		$this->load->view('Master/header');
		$this->load->scaffolding('Proyecto');
	}

}
?>